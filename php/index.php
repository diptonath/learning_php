<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make(){
        return $this->make;
    }

    public function get_model(){
        return $this->model;
    }

    public function get_year(){
        return $this->year;
    }

    public function set_make( $make ){
        $this->make = $make;
    }

    public function set_model( $model ){
        $this->model = $model;
    }

    public function set_year( $year ){
        $this->year = $year;
    }

    public function display_info(){

        echo "Car Make: $this->make".PHP_EOL;
        echo "Car Model: $this->model".PHP_EOL;
        echo "Car Year: $this->year".PHP_EOL;

    }
}

$car = new Car("Toyota", "Corolla", 2015);
$car->display_info();





  
  