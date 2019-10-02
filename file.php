<?php
echo "파일 목록을 출력합니다.";

$path = "./"; //글로벌 변수 (전역변수)
files($path); //글로벌 변수 (전역변수)

function files($path) //지역변수
{
    $files = scandir($path); //지역변수
    // print_r($files);
    for($i=0;$i<count($files);$i++){
        if($files[$i]==".git"||$files[$i]==".."){
            continue;
        }
        if(is_dir($files[$i])) {
            echo "<b>".$files[$i]."</b><br>";
        } else {
            echo $files[$i]."<br>";
        }
    }
}