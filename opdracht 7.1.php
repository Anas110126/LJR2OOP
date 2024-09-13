<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens</title>
</head>
<body>
<h1>Gegevens</h1>
<form action="process.php" method="post">
    <label for="dob">Geboortedatum:</label>
    <input type="date" id="dob" name="dob" required>
    <br><br>
    <label for="phone">Telefoonnummer:</label>
    <input type="tel" id="phone" name="phone" required>
    <br><br>
    <input type="submit" value="Verzenden">
</form>
</body>
</html>
