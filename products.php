<?php
class Products
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice ($price) {
        return $this->$price;
    }
}
?>