<?php
/*
Task : Create a class name “Car” with property brand_name, model_name, mileage, color with abstract function 
setBrandName, setModelName, setMilaege, setColor to set brand_name, model_name, mileage and color, 
Create another function getBrandName, getModelName, getMilaege, getColor to get  brand_name, model_name,
 mileage, color. Create another class called called “Tata” which extends “Car” class. 
Create a object for “Tata” class and access the ; getBrandName,  getModelName.

*/
abstract Class Car
{
protected $brand_name;
protected $model_name;
protected $mileage;
protected $color;

abstract public function setBrandName($name);
abstract public function setModelName($name);
abstract public function setMilaege($name);
abstract public function setColor($name);

public function getBrandName()
{
return $this->brand_name;
}

public function getModelName()
{
    return $this->model_name;
}
public function getMilaege()
{
    return $this->mileage;
}
public function getColor()
{
     return $this->color;
}

}

Class Tata extends Car
{
public function setBrandName($name)
{
    $this->brand_name = $name;
}
public function setModelName($name)
{
    $this->model_name = $name;
}
public function setMilaege($name)
{
    $this->mileage = $name;
}
public function setColor($name)
{
    $this->color = $name;
}
}

$tata = new Tata();
$tata->setBrandName("Audi");
$tata->setModelName("2022-audi-rs-6-avant-wagon");
$brand_name = $tata->getBrandName();
$model_name = $tata->getModelName();
echo $brand_name." ".$model_name;


?>