<?php

  class Bicycle() {
    var brand;
    var model;
    var year;
    var description;
    var weight_kg;
  }

  function name(){
    $this->brand = "DBS";
    $this->model = "Terrengsykkel";
    $this->year = 2020;
    return $this->brand . " " . $this->model . " " . $this->year "<br>";  
  }
 ?>
