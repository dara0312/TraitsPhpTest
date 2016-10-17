<?php

trait Rechargeable {
  public $energy = 100;


  public function recharger() {
    $this->energy = 100;
  }

  public function rouler($km) {
    parent::rouler($km);
    $this->energy -= $km;
  }

}


 ?>
