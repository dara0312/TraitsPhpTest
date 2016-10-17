<?php

/**
 *
 */
class Vehicule
{

  protected $roue = 4;
  private $km = 0;

  public function __construct()
  {
    # code...
  }

  public function rouler($km) {
    $this->km = $km;
  }

}


 ?>
