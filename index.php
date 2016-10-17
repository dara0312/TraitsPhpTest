<?php

spl_autoload_register(function($class) {
  include 'class/' . $class .".php";
});

$TestTrait = new TestTrait();
//$TestTrait->energy = 20;
//$TestTrait->recharger();
var_dump($TestTrait);
//$TestTrait->otherfct();
$TestTrait->rouler(20);
var_dump($TestTrait);

 ?>
