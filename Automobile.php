<?php
/*
 * Automobile class. More detailed info here.
 */

class Automobile Implements iAutomobile
{
    private $make;
    private $make;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->make = $model;
    }

    //returns Automobile Make
    public function getMake()
    {
        return $this->make;
    }

    //returns Automobile Model
    public function getModel()
    {
        return $this->model;
    }

    //Implements driving mechanism for Automobiles based on the make/model
    public function drive($make, $model) {
        //implementation here.
    }

    //implements honking mechanism
    public function horn() {
        //horn
    }
}