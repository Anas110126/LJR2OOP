<?php
$book = array(
    "title"  => "1984",
    "author" => "George Orwell",
    "year"   => "1949"
);

foreach ($book as $key => $value) {
    echo "De " . $key . " is: " . $value . "<br>";
}
?>
