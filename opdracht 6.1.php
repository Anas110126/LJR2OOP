<?php
$numbers = array(5, 10, 15, 20, 25);

for ($i = 0; $i < count($numbers); $i++) {
    $number = $numbers[$i];

    echo "Oorspronkelijk getal: " . $number . "<br>";

    $result = $number * 2;
    echo "Getal vermenigvuldigd met 2: " . $result . "<br><br>";
}
?>
