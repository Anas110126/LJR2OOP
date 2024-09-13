<?php
$prices = array(100, 200, 300, 400, 500);
$i = 0;

while ($i < count($prices) && $prices[$i] < 500) {
    $price = $prices[$i];
    echo "Oorspronkelijke prijs: " . $price . "<br>";

    $newPrice = $price + 50;
    echo "Nieuwe prijs: " . $newPrice . "<br><br>";

    $i++;
}
?>
