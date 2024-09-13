<?php

$randomNumber = rand(1, 10);

do {
    echo "Geraden: " . $randomNumber . "\n";

    $randomNumber = rand(1, 10);
} while ($randomNumber != 5);

echo "Geraden: " . $randomNumber . "\n";


