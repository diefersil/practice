<?php

class Vehicle{

    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year){
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }

    public function getDetails(){
        return "Dados do Veículo: " . $this->make . " " . $this->model . " " . $this->year;

    }

}

//$v1 = new Vehicle('Fiat', 'Toro', '2020');

//echo $v1-> getDetails();