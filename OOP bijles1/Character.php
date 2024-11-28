<?php

class Character {

    public $name;
    public $health;
    public $power;

    // Constructor om naam, kracht en optioneel gezondheid in te stellen
    public function __construct($name, $power, $health = 100) {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
    }

    // Getter voor de eigenschap name
    public function getName() {
        return $this->name;
    }

    // Setter voor de eigenschap name
    public function setName($newName) {
        $this->name = $newName;
    }

    // Getter voor de eigenschap health
    public function getHealth() {
        return $this->health;
    }

    // Setter voor de eigenschap health (alleen positieve waardes)
    public function setHealth($newHealth) {
        if ($newHealth < 0) {
            echo "Fout: Health moet een positieve waarde zijn." . PHP_EOL;
        } else {
            $this->health = $newHealth;
        }
    }

    // Methode om aan te vallen
    public function attack() {
        return "De character {$this->name} valt aan met een kracht van {$this->power}.";
    }
}

// Test de Character class
$knight = new Character("Knight", 50);

// Test setters
$knight->setName("Warrior");
$knight->setHealth(120); // Geldige waarde
$knight->setHealth(-50); // Ongeldige waarde, foutmelding

// Test getters
echo "Naam: " . $knight->getName() . PHP_EOL;
echo "Gezondheid: " . $knight->getHealth() . PHP_EOL;

// Test attack-methode
echo $knight->attack();

?>
