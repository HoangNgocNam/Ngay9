<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (!$this->isFull()){
            array_unshift($this->stack,$item);
        } else {
            echo "stack is full";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()){
            array_shift($this->stack);
        } else {
           echo "Stack Empty";
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

    public function isFull()
    {
        return count($this->limit) == $this->limit;
    }
}