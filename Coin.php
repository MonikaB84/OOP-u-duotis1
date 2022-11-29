<?php

class Coin{
private $name;
private $country;
private $value;
private $madeDate;
private $material;



function __construct(){
    
}



public function setInfo ($name, $country, $value, $madeDate, $material)
{
    $this->name = $name;
    $this->country = $country;
    $this->value = $value;
    $this->madeDate = $madeDate;
    $this->material = $material;
}

}