<?php

class Person{
    private $firstName;
    private $lastName;
    private $personalCode;
    private $distance;

    public function __construct($firstName, $lastName, $personalCode, $distance){
        $this->firstName = $firstName;
        $this->lasName = $lastName;
        $this->personalCode = $personalCode;
        $this->distance = $distance;

    }

    function getFirstName(){
        return $this->firstName;
    }

    function getLastName(){
        return $this->lastName;
    }

    function getPersonalCode(){
        return $this->personalCode;
    }

    function getDistanceTotal(){
        return $this->distance;
    }
    
    function reset(){

    }

    function walk(){
        $this->distance;

    }
    
    
}