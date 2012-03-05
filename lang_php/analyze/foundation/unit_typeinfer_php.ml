open Common
open OUnit

module Ast = Ast_php_simple
module Env = Env_typing_php
module Infer  = Typing_php
module InferH = Typing_helpers_php
module Builtins = Builtins_typed_php
module Ent = Database_code

(*****************************************************************************)
(* Prelude *)
(*****************************************************************************)

(*****************************************************************************)
(* Helpers *)
(*****************************************************************************)
let normalize t =
  let env = Env_typing_php.make_env () in
  InferH.Normalize.normalize env t

let to_string env t =
  let buf = Buffer.create 256 in
  let o   = Buffer.add_string buf in
  let ()  = InferH.Print.show_type env o t in
  Buffer.contents buf

let get_signature file =
  let ast = 
    Parse_php.tmp_php_file_from_string file
    +> Parse_php.parse_program
    +> Ast_php_simple_build.program 
  in
  let env = { (Env_typing_php.make_env ()) with Env_typing_php.
    verbose = false;
    strict = true;
  } in
  Builtins.make env;

  Infer.decls env ast;
  match Common.list_last ast with
  | Ast.FuncDef fd ->
      Infer.func_def env fd;
      normalize (InferH.GEnv.get_fun env (Ast.unwrap fd.Ast.f_name))
  | Ast.ClassDef cd ->
      Infer.class_def env cd;
      normalize (InferH.GEnv.get_class env (Ast.unwrap cd.Ast.c_name))
  | _ -> failwith "last entity in file must be a class or function"

(*****************************************************************************)
(* Unit tests *)
(*****************************************************************************)
let unittest =
  let n = normalize in
  "type_inference" >::: ([

  (*-------------------------------------------------------------------------*)
  (* Basic *)
  (*-------------------------------------------------------------------------*)

   "basic" >:: (fun () ->
     let t sig_ def = assert_equal sig_ (get_signature def) in

     t (n Env.(fun_ [int] int)) "function f($x) { return $x + 1; }";
     t (n Env.(fun_ [bool] bool)) "function f($x) { return $x === true; }";
   );
    
    "trait" >:: (fun () ->
      let file = "
trait T1 { public function foo() { return 0; } }
trait T2 { public function bar() { return 0; } }
class A { use T1, T2; }
function f() { $a = new A(); return $a->foo(); }
    " in
      assert_equal (n Env.(fun_ [] int)) (get_signature file)
    );

  (*-------------------------------------------------------------------------*)
  (* Error handling *)
  (*-------------------------------------------------------------------------*)

    "use of undefined" >:: (fun () ->

      let file = "
function foo() {
  undefined();
}" in
      try 
        let _ = get_signature file in
        assert_failure 
          "it should raise exns in strict mode on undefined entities"
      with Infer.Error err ->
        (match err with
        | Infer.UnknownEntity (Ent.Function, "undefined") -> ()
        | _ ->
            assert_failure
              "it should throw the right exception"
        )
    );
  ])


