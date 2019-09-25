<?php

include "function_11.php"; // 함수 선언
include "function_11.php"; // 함수 중복 처리

list($name, $num) = daelim("대림이",201840207);
// $name <-- $name[0]
// $num <-- $name[1]
// print_r($name);
echo $name . "=" . $num;