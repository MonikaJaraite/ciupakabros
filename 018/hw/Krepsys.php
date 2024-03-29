<?php

require __DIR__ . '/Grybas.php';

// 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).

class Krepsys {

    const DYDIS = 500;
    public $grybai = [];
    public $pririnktuGrybuSvoris = 0;

    public function eitiGrybauti() {
        $grybas = new Grybas;
        if ($grybas->getValgomas() && !$grybas->getSukirmijes()) {
            $this->grybai[] = $grybas;
            $this->pririnktuGrybuSvoris += $grybas->getSvoris();
        }
    }

}