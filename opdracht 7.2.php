<?php
// Controleer of de voornaam en achternaam via de URL zijn doorgegeven
if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

    // Print de ontvangen voornaam en achternaam
    echo "Voornaam: " . htmlspecialchars($firstname) . "<br>";
    echo "Achternaam: " . htmlspecialchars($lastname) . "<br>";
} else {
    // Toon de link om de voornaam en achternaam door te geven
    echo '<a href="?firstname=Jan&lastname=Jansen">Klik hier om je naam door te geven</a>';
}
?>



