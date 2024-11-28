<?php

class weapon
{
    public $name;
    public $damage;
    public $range;

    public function __construct($name, $damage, $range)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;
    }

    public function getWeaponInfo()
    {
        return "Het wapen {$this->name} doet {$this->damage} schade en heeft een {$this->range} bereik.";
    }
}
$sword = new Weapon("Zwaard", 25, "kort");

echo $sword->getWeaponInfo();
