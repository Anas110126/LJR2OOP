<?php
$products = array(
    array("Laptop", 999.99, 30),
    array("Smartphone", 699.99, 50),
    array("Monitor", 199.99, 75),
    array("Toetsenbord", 49.99, 100)
);

echo $products[1][0] . " kost " . $products[1][1] . " euro<br>";


$products[3][2] = 120;

$products[] = array("Tablet", 299.99, 50);


print_r($products);

