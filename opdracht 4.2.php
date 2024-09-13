<?php
// Associatieve array met boeken
$books = array(
    "book1" => array(
        "title" => "De Avonden",
        "author" => "Gerard Reve",
        "pages" => 320
    ),
    "book2" => array(
        "title" => "Het Diner",
        "author" => "Herman Koch",
        "pages" => 300
    ),
    "book3" => array(
        "title" => "De Zwarte Met Het Witte Hart",
        "author" => "Arthur Japin",
        "pages" => 400
    )
);

// Print de titel en auteur van book2
echo "Titel: " . $books["book2"]["title"] . "<br>";
echo "Auteur: " . $books["book2"]["author"] . "<br><br>";

// Verander het aantal pagina's van book1 naar 350
$books["book1"]["pages"] = 350;

// Voeg een vierde boek toe
$books["book4"] = array(
    "title" => "De Ontdekking van de Hemel",
    "author" => "Harry Mulisch",
    "pages" => 900
);

// Print alle boeken met titel, auteur en aantal pagina's
foreach ($books as $key => $book) {
    echo $key . ":<br>";
    echo "Titel: " . $book["title"] . "<br>";
    echo "Auteur: " . $book["author"] . "<br>";
    echo "Pagina's: " . $book["pages"] . "<br><br>";
}


