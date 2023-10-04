<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> price = $price;
    }

    public function getFormattedPrice() {
        return '$' . number_format($this -> price, 2);
    }

    public function showDetails() {
        echo "\n";
        echo "Product Details:\n";
        echo "- ID: {$this -> id} \n";
        echo "- Name: {$this -> name} \n";
        echo "- Price: {$this -> getFormattedPrice()} \n";
    }
}

$id = readline("Enter product id : ");
$name = readline("Enter product name : ");
$price = readline("Enter product price : $");

$product = new Product($id, $name, $price);
$product -> showDetails();
?>