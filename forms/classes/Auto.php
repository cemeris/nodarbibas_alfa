<?php

class Auto
{
  private $activa_radio_station = 101;
  private $brand = 'undefined';

  public function __construct($brand) {
    $this->brand = $brand;
  }

  public function drive() {

  }

  public function wash() {

  }

  public function getBrend() {
    return $this->brand;
  }

  public function autopilot($location) {
    $this->drive();
    // ...
  }
}

$volvo = new Auto("volvo");
$toyota = new Auto("toyota");

$volvo->getBrend(); // returns "volvo"
$volvo->autopilot(2431);

$toyota->getBrend(); // returns "toyota"
