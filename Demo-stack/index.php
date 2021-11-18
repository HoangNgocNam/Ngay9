<?php
include_once "Stack.php";
include_once "Books.php";

$books = new Books(5);
$books->push("hoa hoc 11");
$books->push("toan hoc 11");
$books->push("van hoc 11");
$books->push("dia ly  11");
var_dump($books->getStack());