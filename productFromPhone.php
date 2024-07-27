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
}
class Phone extends Product
{
    private $cpu;
    private $ram;
    private $countSim;
    private $hdd;
    private $os;
    public function __construct($name, $price, $cpu, $ram, $countSim, $hdd, $os)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }
    public function getCpu()
    {
        return $this->cpu;
    }
    public function getRam()
    {
        return $this->ram;
    }
    public function getCountSim()
    {
        return $this->countSim;
    }
    public function getHdd()
    {
        return $this->hdd;
    }
    public function getOs()
    {
        return $this->os;
    }
    public function displayInfo()
    {
        return "Name: " . $this->getName() . "\n" .
            "Price: " . $this->getPrice() . "\n" .
            "CPU: " . $this->getCpu() . "\n" .
            "RAM: " . $this->getRam() . "\n" .
            "SIM Count: " . $this->getCountSim() . "\n" .
            "HDD: " . $this->getHdd() . "\n" .
            "OS: " . $this->getOs();
    }
}
$phone = new Phone("Smartphone SaSA", 999.99, "Media-Tek 223", "8GB", 2, "256GB", "Android 12");
echo $phone->displayInfo();