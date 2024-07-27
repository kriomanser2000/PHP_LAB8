<?php
class Product
{
    protected $name;
    protected $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
//class Monitor
class Monitor extends Product
{
    private $diagonal;
    private $frequency;
    private $ports;
    public function __construct($name, $price, $diagonal, $frequency, $ports)
    {
        parent::__construct($name, $price);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }
    public function getDiagonal()
    {
        return $this->diagonal;
    }
    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
    }
    public function getFrequency()
    {
        return $this->frequency;
    }
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }
    public function getPorts()
    {
        return $this->ports;
    }
    public function setPorts($ports)
    {
        $this->ports = $ports;
    }
}