<?php
// Haal het IP-adres van de gebruiker op
$user_ip = $_SERVER['REMOTE_ADDR'];

// Haal de serverpoort op
$server_port = $_SERVER['SERVER_PORT'];

// Haal de browser en besturingssysteem van de gebruiker op via HTTP_USER_AGENT
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Toon de informatie
echo "IP-adres van de gebruiker: " . $user_ip . "<br>";
echo "Serverpoort: " . $server_port . "<br>";
echo "Browser en besturingssysteem (User Agent): " . $user_agent . "<br>";
?>

