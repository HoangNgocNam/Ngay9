<?php

class Patient
{
    public $name;
    public $code;
    public $next;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }

    public function readPatient()
    {
        return "name:" . $this->name . " , " . " code: " . $this->code;

    }
}