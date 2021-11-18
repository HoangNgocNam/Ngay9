<?php
include_once "Stack.php";
class Books implements Stack
{

    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->Stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) > $this->limit){
            throw new Exception("stack full");
        } else {
            array_push($this->stack,$item);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            throw new Exception("stack empty");
        }else {
            array_pop($this->stack);
        }
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
       return empty($this->stack);
    }

    public function getStack()
    {
        return $this->stack;
    }
}