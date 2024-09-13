<?php

$score = 105;

switch (true) {
    case ($score > 90):
        echo "Geweldig\n";
        break;
    case ($score >= 75 && $score <= 90):
        echo "Goed\n";
        break;
    case ($score >= 55 && $score < 75):
        echo "Voldoende\n";
        break;
    case ($score < 55):
        echo "Onvoldoende\n";
        break;
}

$result = ($score > 55) ? "Geslaagd" : "Gezakt";
echo $result;

