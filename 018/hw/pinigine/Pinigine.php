<?php

// 2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine {

    protected $popieriniaiPinigai = 0, $metaliniaiPinigai = 0, $monetuKiekis = 0, $banknotuKiekis = 0;

    public function ideti(float $kiekis) :void
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            $this->monetuKiekis++;
        } else {
            $this->popieriniaiPinigai += $kiekis;
            $this->banknotuKiekis++;
        }
    }

    public function skaiciuoti() :void
    {
        echo '<h2>'. ($this->metaliniaiPinigai + $this->popieriniaiPinigai) .'</h2>'; 
        echo '<h2> metalo: '. $this->metaliniaiPinigai .'</h2>'; 
        echo '<h2> popieriaus: '. $this->popieriniaiPinigai .'</h2>'; 
    }

    public function monetos() : void {
        echo '<h2> Monetu: ' . $this->monetuKiekis . '</h2>';        
    }

    public function banknotai() : void {
        echo '<h2> Banknotu: ' . $this->banknotuKiekis . '</h2>';        
    }

}

// 8. Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui.

