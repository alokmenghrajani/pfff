TOP=../..
##############################################################################
# Variables
##############################################################################
TARGET=lib

-include $(TOP)/Makefile.config

SRC= flag_parsing_web.ml \
     ast_web.ml \
     export_web.ml \
     parse_web.ml \
     test_parsing_web.ml \

#     meta_ast_html.ml \
#     visitor_html.ml \
#     lib_parsing_html.ml \
#     parser_html.ml lexer_html.ml \
#     token_helpers_html.ml \
#     unparse_html.ml \


SYSLIBS= str.cma unix.cma 
LIBS=$(TOP)/commons/commons.cma

INCLUDEDIRS= $(TOP)/commons $(TOP)/commons/ocamlextra \
 $(TOP)/commons/lib-sexp $(TOP)/commons/lib-json \
 $(TOP)/globals \
 $(TOP)/h_program-lang \
 $(TOP)/lang_html/parsing \
 $(TOP)/lang_js/parsing \
 $(TOP)/lang_css/parsing \


##############################################################################
# Generic variables
##############################################################################

-include $(TOP)/Makefile.common

##############################################################################
# Top rules
##############################################################################
all:: $(TARGET).cma
all.opt:: $(TARGET).cmxa

$(TARGET).cma: $(OBJS)
	$(OCAMLC) -a -o $(TARGET).cma $(OBJS)

$(TARGET).cmxa: $(OPTOBJS) $(LIBS:.cma=.cmxa)
	$(OCAMLOPT) -a -o $(TARGET).cmxa $(OPTOBJS)

$(TARGET).top: $(OBJS) $(LIBS)
	$(OCAMLMKTOP) -o $(TARGET).top $(SYSLIBS) $(LIBS) $(OBJS)

clean::
	rm -f $(TARGET).top

##############################################################################
# Generic rules
##############################################################################

##############################################################################
# Literate Programming rules
##############################################################################
