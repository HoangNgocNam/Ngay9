<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push($item)
    {
        if (!$this->isFull()){
            array_push($this->stack, $item);
        } else {
            echo " Đầy rồi bạn eiiii!";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()){
            return array_pop($this->stack);
        } else {
            echo " Còn đâu mà tìm !";
        }
    }

    public function isEmpty()
    {
        return count($this->limit) == 0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

    public function display()
    {
//        return sort($this->stack);
        for ($i = 0; $i < count($this->stack); $i++){
            echo $this->stack[$i];
        }
    }
}