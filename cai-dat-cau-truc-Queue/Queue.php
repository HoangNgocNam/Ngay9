<?php

class Queue
{
    public $queue;
    public $limit;

    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enQueue($item)
    {
        if (!$this->isFull()){
            array_push($this->queue,$item);
        } else {
            echo "stack is full";
        }
    }

    public function deQueue()
    {
        if (!$this->isEmpty()){
            array_shift($this->queue);
        } else {
            echo "Stack Empty";
        }

    }

    public function top()
    {
        return end($this->queue);
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function isFull()
    {
        return count($this->limit) == $this->limit;
    }
}