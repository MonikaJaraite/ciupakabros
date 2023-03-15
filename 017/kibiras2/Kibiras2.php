<?php

// 3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.

class Kibiras2 {
    protected $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        $this->akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }

    public static function visasAkmenuKiekis() {
        return $this::akmenuKiekisVisuoseKibiruose;
    }

}