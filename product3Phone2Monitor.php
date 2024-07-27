<?php
class Phone
{
    public $brand;
    public $model;
    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}
class Monitor
{
    public $brand;
    public $size;
    public function __construct($brand, $size)
    {
        $this->brand = $brand;
        $this->size = $size;
    }
}
require_once 'Phone.php';
require_once 'Monitor.php';
$phone1 = new Phone('Apple', 'iPhone 13');
$phone2 = new Phone('Samsung', 'Galaxy S21');
$phone3 = new Phone('Google', 'Pixel 6');
$monitor1 = new Monitor('Dell', '24 inch');
$monitor2 = new Monitor('HP', '27 inch');
$products = array($phone1, $phone2, $phone3, $monitor1, $monitor2);
foreach ($products as $product)
{
    if ($product instanceof Phone)
    {
        echo "Phone: " . $product->brand . " " . $product->model . "<br>";
    }
    elseif ($product instanceof Monitor)
    {
        echo "Monitor: " . $product->brand . " " . $product->size . "<br>";
    }
}