<?php
include_once "Patient.php";

class Queue
{
    public $firstPatient;
    public $lastPatient;

    public function __construct()
    {
        $this->firstPatient = null;
        $this->lastPatient = null;
    }

    public function addFirst($item)
    {
        $item->next = $this->firstPatient;
        $this->firstPatient = $item;

        if (is_null($this->lastPatient)) {
            $this->lastPatient = $item;
        }
    }

    public function addLast($item)
    {
        if (is_null($this->firstPatient)){
            $this->lastPatient ->next = $item;
            $item->next = null;
            $this->lastPatient = $item;
        }
    }

    public function addPatient($patient)
    {
        $current = $this->firstPatient ;
        if ($this->firstPatient == null){
            $this->addFirst($patient);
        }

        while (!is_null($current)){
            if (null == $current->next){
                $this->addLast($current);
                break;
            }

            if ($patient->code < $current->next->code){
                $patient->next = $current->next;
                $current->next = $patient;
                break;
            }

            $current = $current->next;
        }
    }

    public function readList()
    {
        $listItem = [];
        $current = $this->firstPatient;

        while (!is_null($current)){
            array_push($listItem,$current->readPatient());
            $current = $current->next;
        }
        return $listItem;
    }

    public function deQueue()
    {
        $item = $this->firstPatient->readPatient();
        $this->firstPatient = $this->firstPatient->next;
        return $item;
    }
}