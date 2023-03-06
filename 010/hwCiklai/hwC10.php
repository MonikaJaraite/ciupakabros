<?php

// Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.

$ikalimas = 0;
$smugiuSkaicius = 0;

while ($ikalimas < 85) {
    $mazasSmugis = rand(5, 20);
    echo 'Mazas smugis: ' . $mazasSmugis . ', ';
    $ikalimas += $mazasSmugis;
    echo 'Ikalta: ' . $ikalimas . '<br>';
    $smugiuSkaicius++;
} 
echo 'Mazu smugiu skaicius: ' . $smugiuSkaicius . '<br>';

echo '<br>';

$ikalimas2 = 0;
$smugiuSkaicius2 = 0;

while ($ikalimas2 < 85) {
    $tikimybe = rand(0, 1);
    if ($tikimybe == 0) {
        echo 'Tikimybe: ' . $tikimybe . ', ';
        $smugiuSkaicius2++;
        echo 'Smugiu skaicius: ' . $smugiuSkaicius2 . '<br>';
        continue;
    } if ($tikimybe == 1) {
        $didelisSmugis = rand(20, 30);
        echo 'Didelis smugis: ' . $didelisSmugis . ', ';
        $ikalimas2 += $didelisSmugis;
        $smugiuSkaicius2++;
        echo 'Smugiu skaicius: ' . $smugiuSkaicius2 . ', ';
        echo 'Ikalta: ' . $ikalimas2 . '<br>';
    }
} 
echo 'Dideliu smugiu skaicius: ' . $smugiuSkaicius2;