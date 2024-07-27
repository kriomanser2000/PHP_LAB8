<?php
class Product
{
    private $name;
    private $price;
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
class ProductRepository
{
    private $products = [];
    public function __construct()
    {
        $this->products[] = new Product('Product 1', 100);
        $this->products[] = new Product('Product 2', 200);
        $this->products[] = new Product('Product 3', 300);
    }
    public function getProducts()
    {
        return $this->products;
    }
}
$productRepository = new ProductRepository();
$products = $productRepository->getProducts();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product List</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?php echo htmlspecialchars($product->getName()); ?> - <?php echo htmlspecialchars($product->getPrice()); ?> USD
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>