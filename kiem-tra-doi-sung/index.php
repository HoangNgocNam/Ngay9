<?php
function check($str){
    $mid = (int)(strlen($str)/2);
    for ($i = 0; $i < $mid; $i++){
        if ($str[$i] != $str[strlen($str) - $i -1]){
            return false;
        }
    }
    return  true;
}

echo check(123321);