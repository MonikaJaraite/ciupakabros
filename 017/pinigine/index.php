<?php

// 2. Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

require __DIR__ . '/Pinigine.php';

echo '<pre>';

$PinigineMano = new Pinigine;

$PinigineMano->ideti(5);
$PinigineMano->ideti(2);

echo 'Pinigineje pinigu yra: ' . $PinigineMano->skaiciuoti();