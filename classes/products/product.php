<?php
class Product
{
    protected $brand;
    protected $price;

    public function setBrand($value)
    {
        $this->brand =($value);
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }
}