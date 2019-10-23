<?php

include "Test.php";
$obj = Test::make();
$obj1 = Test::make();
$obj2 = Test::make();

new Table1;
$obj->factory("Table1");

$obj->strange("");