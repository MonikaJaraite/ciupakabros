<?php

// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;

// do {
//     $a = rand(0, 1);
//     if ($a == 0); {
//         echo 'H';
//     } else echo 'S';
// }

do {
    $a = rand(0, 1);
    echo '<span style="color:crimson;">' . $a . ' ' . '</span>';
    if ($a == 1) {
        echo '<br>' . 'S' . '<br>';
    } elseif ($a == 0) {
        echo '<br>' . 'H' . '<br>';
    }
} while ($a != 0);

echo '<br>';

$b = '';

while ($b < 3) {
    $a = rand(0, 1);
    if ($a == 1) {
        echo '<br>' . 'S' . '<br>';
    } elseif ($a == 0) {
        echo '<br>' . 'H' . '<br>';
        $b++;
    }
}

echo '<h3 style="color:blue">' . $b . '</h3>';