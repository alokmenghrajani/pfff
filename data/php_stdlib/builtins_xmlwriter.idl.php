<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
function xmlwriter_open_memory() { }
function xmlwriter_open_uri($uri) { }
function xmlwriter_set_indent_string($xmlwriter, $indentstring) { }
function xmlwriter_set_indent($xmlwriter, $indent) { }
function xmlwriter_start_document($xmlwriter, $version = "1.0", $encoding = null_string, $standalone = null_string) { }
function xmlwriter_start_element($xmlwriter, $name) { }
function xmlwriter_start_element_ns($xmlwriter, $prefix, $name, $uri) { }
function xmlwriter_write_element_ns($xmlwriter, $prefix, $name, $uri, $content = null_string) { }
function xmlwriter_write_element($xmlwriter, $name, $content = null_string) { }
function xmlwriter_end_element($xmlwriter) { }
function xmlwriter_full_end_element($xmlwriter) { }
function xmlwriter_start_attribute_ns($xmlwriter, $prefix, $name, $uri) { }
function xmlwriter_start_attribute($xmlwriter, $name) { }
function xmlwriter_write_attribute_ns($xmlwriter, $prefix, $name, $uri, $content) { }
function xmlwriter_write_attribute($xmlwriter, $name, $value) { }
function xmlwriter_end_attribute($xmlwriter) { }
function xmlwriter_start_cdata($xmlwriter) { }
function xmlwriter_write_cdata($xmlwriter, $content) { }
function xmlwriter_end_cdata($xmlwriter) { }
function xmlwriter_start_comment($xmlwriter) { }
function xmlwriter_write_comment($xmlwriter, $content) { }
function xmlwriter_end_comment($xmlwriter) { }
function xmlwriter_end_document($xmlwriter) { }
function xmlwriter_start_pi($xmlwriter, $target) { }
function xmlwriter_write_pi($xmlwriter, $target, $content) { }
function xmlwriter_end_pi($xmlwriter) { }
function xmlwriter_text($xmlwriter, $content) { }
function xmlwriter_write_raw($xmlwriter, $content) { }
function xmlwriter_start_dtd($xmlwriter, $qualifiedname, $publicid = null_string, $systemid = null_string) { }
function xmlwriter_write_dtd($xmlwriter, $name, $publicid = null_string, $systemid = null_string, $subset = null_string) { }
function xmlwriter_start_dtd_element($xmlwriter, $qualifiedname) { }
function xmlwriter_write_dtd_element($xmlwriter, $name, $content) { }
function xmlwriter_end_dtd_element($xmlwriter) { }
function xmlwriter_start_dtd_attlist($xmlwriter, $name) { }
function xmlwriter_write_dtd_attlist($xmlwriter, $name, $content) { }
function xmlwriter_end_dtd_attlist($xmlwriter) { }
function xmlwriter_start_dtd_entity($xmlwriter, $name, $isparam) { }
function xmlwriter_write_dtd_entity($xmlwriter, $name, $content, $pe = false, $publicid = null_string, $systemid = null_string, $ndataid = null_string) { }
function xmlwriter_end_dtd_entity($xmlwriter) { }
function xmlwriter_end_dtd($xmlwriter) { }
function xmlwriter_flush($xmlwriter, $empty = true) { }
function xmlwriter_output_memory($xmlwriter, $flush = true) { }
class XMLWriter {
 function __construct() { }
 function openMemory() { }
 function openURI($uri) { }
 function setIndentString($indentstring) { }
 function setIndent($indent) { }
 function startDocument($version = "1.0", $encoding = null_string, $standalone = null_string) { }
 function startElement($name) { }
 function startElementNS($prefix, $name, $uri) { }
 function writeElementNS($prefix, $name, $uri, $content = null_string) { }
 function writeElement($name, $content = null_string) { }
 function endElement() { }
 function fullEndElement() { }
 function startAttributens($prefix, $name, $uri) { }
 function startAttribute($name) { }
 function writeAttributeNS($prefix, $name, $uri, $content) { }
 function writeAttribute($name, $value) { }
 function endAttribute() { }
 function startCData() { }
 function writeCData($content) { }
 function endCData() { }
 function startComment() { }
 function writeComment($content) { }
 function endComment() { }
 function endDocument() { }
 function startPI($target) { }
 function writePI($target, $content) { }
 function endPI() { }
 function text($content) { }
 function writeRaw($content) { }
 function startDTD($qualifiedname, $publicid = null_string, $systemid = null_string) { }
 function writeDTD($name, $publicid = null_string, $systemid = null_string, $subset = null_string) { }
 function startDTDElement($qualifiedname) { }
 function writeDTDElement($name, $content) { }
 function endDTDElement() { }
 function startDTDAttlist($name) { }
 function writeDTDAttlist($name, $content) { }
 function endDTDAttlist() { }
 function startDTDEntity($name, $isparam) { }
 function writeDTDEntity($name, $content, $pe = false, $publicid = null_string, $systemid = null_string, $ndataid = null_string) { }
 function endDTDEntity() { }
 function endDTD() { }
 function flush($empty = true) { }
 function outputMemory($flush = true) { }
 function __destruct() { }
}
