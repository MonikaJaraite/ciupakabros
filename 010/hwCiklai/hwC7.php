<?php

// Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

// if ($Petras > $Kazys) {
//     echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. '
// . 'Partiją laimėjo: Petras';
// } elseif ($Petras < $Kazys) {
//     echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. '
// . 'Partiją laimėjo: Kazys';
// } else {
//     echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Lygiosios.';
// }

// while ($p < 222) {
//     $Petras = rand(10, 20);
//     $p += $Petras;
//     '<br>';
//     echo 'Petras: ' . $p . '<br>';
// } 

// while ($k < 222) {
//     $Kazys = rand(10, 20);
//     $k += $Kazys;
//     '<br>';
//     echo 'Kazys: ' . $k . '<br>';
// } 

// if ($p > $k) {
//     echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Petras';
// } elseif ($p < $k) {
//     echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Kazys';
// }

$p = 0;
$k = 0;

while ($p < 222 || $k < 222) {
    $Petras = rand(10, 20);
    $p += $Petras;
    $Kazys = rand(10, 20);
    $k += $Kazys;
    '<br>';
    if ($p > $k) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Petras' . '<br>';
    } elseif ($p < $k) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Partiją laimėjo: Kazys' . '<br>';
    } elseif ($p == $k) {
        echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Lygiosios' . '<br>';
    }
}                   // while ($p >= 222 || $k >= 222);

if ($p >= 222 && $k < 222) {
    echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Žaidimą laimėjo: Petras' . '<br>';
} elseif ($k >= 222 && $p < 222) {
    echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Žaidimą laimėjo: Kazys' . '<br>';
} elseif ($p == 222 && $k == 222) {
    echo 'Petras: ' . $Petras . ', ' . 'Kazys: ' . $Kazys . '. ' . 'Žaidimas sužaistas lygiosiomis' . '<br>';
}