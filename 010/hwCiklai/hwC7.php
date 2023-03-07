<?php

// Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

$p = 0;
$k = 0;

while ($p < 222 && $k < 222) {
    $Petras = rand(10, 20);
    $p += $Petras;
    $Kazys = rand(10, 20);
    $k += $Kazys;
    '<br>';
    if ($Petras > $Kazys) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Petras' . '<br>';
    } elseif ($Petras < $Kazys) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Kazys' . '<br>';
    } elseif ($Petras == $Kazys) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Lygiosios' . '<br>';
    }
}

if ($p >= 222 && $k < 222) {
    echo 'Petras: ' . $p . ', ' . 'Kazys: ' . $k . '. ' . 'Žaidimą laimėjo: Petras' . '<br>';
} elseif ($k >= 222 && $p < 222) {
    echo 'Petras: ' . $p . ', ' . 'Kazys: ' . $k . '. ' . 'Žaidimą laimėjo: Kazys' . '<br>';
} elseif ($p == 222 && $k == 222) {
    echo 'Petras: ' . $p . ', ' . 'Kazys: ' . $k . '. ' . 'Žaidimas sužaistas lygiosiomis' . '<br>';
}