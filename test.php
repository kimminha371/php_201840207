<?php
function multi($num){
    for($i=1;$i<=9;$i++){
        echo $num ."*".$i ."=".($num*$i)."\n";
    }
}
for ($i=1;$i<=9;$i++){
  
    multi($i);
}