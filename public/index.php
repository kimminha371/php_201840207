<?php

$layout = file_get_contents("../theme/index.html");

$filename = $_SERVER['REQUEST_URI'].".html";

if(file_exists("../".$filename)){
    $body = file_get_contents("../".$filename);
    $layout = str_replace("{(main)}",$body,$layout);

} else {
    $body = file_get_contents("../home.html");
    $layout = str_replace("{(main)}",$body,$layout);
}

echo $layout;

/*echo "내가 처음이야";
*/