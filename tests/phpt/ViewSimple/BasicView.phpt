--TEST--
ViewSimple - BasicView

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("ViewSimple", "testBasicView");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("ViewSimple", "testBasicView");
--EXPECT--
PHP_COUCHBASE_OK