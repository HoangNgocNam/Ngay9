<?php
function chuyendoi($num){
    $stack = new SplStack();
    $quatient = $num;
    while ($quatient != 0){
        $renainder = $quatient%2;
        $stack->push($renainder);
        $quatient = (int)($quatient/2);
    }
    $binary = "";
    while ($stack->count() > 0){
        $binary = $stack->pop();
    }
    return $binary;
}

echo chuyendoi(13);