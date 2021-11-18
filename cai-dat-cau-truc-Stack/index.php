<?php
include_once "Stack.php";

$stack = new Stack(10);
$stack->push("sack 1");
$stack->push("sack 2");
$stack->push("sack 3");
$stack->push("sack 4");
$stack->push("sack 5");
$stack->pop();
$stack->pop();
$stack->pop();
$stack->isEmpty();
$stack->push("toan");
$stack->push("van");
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->isEmpty();
echo "<pre>";
print_r($stack);