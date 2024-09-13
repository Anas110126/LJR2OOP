<?php
// Start de sessie
session_start();

// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sla de kleurvoorkeur op in een $_SESSION variabele
    $_SESSION['favorite_color'] = $_POST['favorite_color'];

    // Redirect naar de welkomstpagina
    header("Location: welkom.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleurvoorkeur</title>
</head>
<body>
<h2>Kies je favoriete kleur:</h2>
<form method="post" action="">
    <label for="favorite_color">Favoriete kleur:</label>
    <input type="text" name="favorite_color" id="favorite_color" required>
    <button type="submit">Opslaan</button>
</form>
</body>
</html>

