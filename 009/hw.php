<?php

$manoVardas = 'Monika';
$manoPavarde = 'Jara';
$manoGimimoMetai = 1981;
$sieMetai = 2023;

$pasisveikinimas = 'Aš esu ' . $manoVardas . ' ' . $manoPavarde . '. Man yra ' . $sieMetai - $manoGimimoMetai . ' metai(ų).';

echo "<h2>$pasisveikinimas</h2>"; // Aš esu Monika Jara. Man yra 42 metai(ų).

echo '<br>';

$pirmasKintamasis = rand(0, 4);
$antrasKintamasis = rand(0, 4);

if ($pirmasKintamasis >= $antrasKintamasis && $antrasKintamasis != 0) {
    echo (round(($pirmasKintamasis/$antrasKintamasis), 2));
} elseif ($antrasKintamasis >= $pirmasKintamasis && $pirmasKintamasis != 0) {
    echo (round(($antrasKintamasis/$pirmasKintamasis), 2));
} else {
    echo 'dalyba is 0 negalima';
}

echo '<br>';

$rand1 = rand(0, 25);
$rand2 = rand(0, 25);
$rand3 = rand(0, 25);

echo "$rand1, $rand2, $rand3";

echo '<br>';

$result = $rand1 + $rand2 + $rand3 - max($rand1, $rand2, $rand3) - min($rand1, $rand2, $rand3);

echo "<h3>$result</h3>";