<?php
abstract class Product
{
    protected $name;
    protected $description;
    protected $brand;
    public function __construct($name, $description, $brand)
    {
        $this->name = $name;
        $this->description = $description;
        $this->brand = $brand;
    }
    abstract public function getProduct();
}
class Phone extends Product
{
    private $cpu;
    private $ram;
    private $countSim;
    private $hdd;
    private $os;
    public function __construct($name, $description, $brand, $cpu, $ram, $countSim, $hdd, $os)
    {
        parent::__construct($name, $description, $brand);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }
    public function getProduct()
    {
        return sprintf(
            "Phone: %s\nDescription: %s\nBrand: %s\nCPU: %s\nRAM: %s\nSIM Count: %d\nHDD: %s\nOS: %s",
            $this->name, $this->description, $this->brand, $this->cpu, $this->ram, $this->countSim, $this->hdd, $this->os
        );
    }
}
class Monitor extends Product
{
    private $model;
    private $diagonal;
    private $frequency;
    private $ports;
    public function __construct($name, $description, $brand, $model, $diagonal, $frequency, $ports)
    {
        parent::__construct($name, $description, $brand);
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }
    public function getProduct()
    {
        return sprintf(
            "Monitor: %s\nDescription: %s\nBrand: %s\nModel: %s\nDiagonal: %s\"\nFrequency: %sHz\nPorts: %s",
            $this->name, $this->description, $this->brand, $this->model, $this->diagonal, $this->frequency, $this->ports
        );
    }
}
$phone = new Phone("iPhone 13", "Latest model from Apple", "Apple", "A15 Bionic", "6GB", 2, "128GB", "iOS");
echo $phone->getProduct();
$monitor = new Monitor("UltraWide", "High-resolution monitor", "Dell", "U3818DW", 38, 60, "HDMI, DisplayPort");
echo "\n" . $monitor->getProduct();