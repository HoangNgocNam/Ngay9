<?php
include_once "Stack.php";

$list = new Stack(6);
$list->push(1);
$list->push(3);
$list->push(5);
$list->push(7);
$list->push(9);
$list->push(11);
$list->pop();
$list->pop();
$list->pop();
echo "<pre>";
print_r($list->display());