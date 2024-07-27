<?php
class Product
{
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getProduct()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}
$product = new Product(1, 'Laptop', 999.99);
$productInfo = $product->getProduct();
print_r($productInfo);