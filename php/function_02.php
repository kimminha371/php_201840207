<?php
//함수 선언
function hello($name="**",int $a,int $b) 
{
    $sum = $a + $b;
    echo "반가워요 ".$name."=".$sum."<br>";
    // 반환값
    return $sum;
}

$user = "대림이";
$s = hello($user,"1","2");
echo "합계는 = ".$s;