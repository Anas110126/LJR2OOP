<?php
$pets = [
    ["species" => "Hond", "name" => "Rex", "age" => 5],
    ["species" => "Kat", "name" => "Whiskers", "age" => 3],
    ["species" => "Papegaai", "name" => "Polly", "age" => 2]
];

echo "Naam: " . $pets[2]["name"] . ", Soort: " . $pets[2]["species"] . "\n";

$pets[1]["age"] += 1;

$pets[] = ["species" => "Kat", "name" => "Simba", "age" => 2];

echo "Array\n(\n";
foreach ($pets as $pet) {
    echo "    Array ( [species] => " . $pet["species"] . " [name] => " . $pet["name"] . " [age] => " . $pet["age"] . " )\n";
}
echo ")";
?>
