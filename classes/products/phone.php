<?php

require_once(__DIR__ . "/product.php");

class Smartphone extends Product
{
    private $model;
    private $memory;

    public function __construct($phoneBrand, $phoneMemory, $phonePrice, $phoneModel)
    {
        $this->setBrand($phoneBrand);
        $this->setPrice($phonePrice);
        $this->setModel($phoneModel);
        $this->setStorage($phoneMemory);
    }

    public function setModel($value)
    {
        $this->model = $value;
    }

    public function setStorage($value)
    {
        $this->memory = $value;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getStorage()
    {
        return $this->memory;
    }

    
}