<?php
/*
include "class_01.php";
include "class_02.php";
*/
//greeting();
include "autoload.php";

$obj1 = new left; //생성
$obj1->greeting();
$obj1->daelim();

$obj1->name = "대림이";
var_dump($obj1);
echo "<br>";

$property = "name";
echo $obj1->$property . "입니다.<br>";
echo "영어 코드는 = ". $obj1::ENGLISH."<br>";

$obj2 = new right; //생성
$obj2->name = "대숙이";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2->daelim();
$result->daelim();

//메소드 체인
echo "---<br>";
$obj2->greeting()->daelim()->fool()->bar();

echo "---<br>";
echo foo::$aaa;
foo::hello();