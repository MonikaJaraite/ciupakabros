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

echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "$a, $b, $c";

$trikampis = $a + $b <= $c || $b + $c <= $a || $c + $a <= $b ? 'trikampi sudaryti neimanoma' : 'trikampi sudaryti galima';

echo '<br>';

echo $trikampis;

echo '<br>';

$kintamasis1 = rand(0, 2);
$kintamasis2 = rand(0, 2);
$kintamasis3 = rand(0, 2);
$kintamasis4 = rand(0, 2);

echo "$kintamasis1, $kintamasis2, $kintamasis3, $kintamasis4"; // sita reikia pabaigti



echo '<br>';

$randomH3 = rand(1, 6);

echo "<h3>$randomH3</h3>";

// $ats = $k1 < 0 ? '<h4 style="color:green">' : $k1 = 0 ? '<h4 style="color:crimson">' : $k1 > 0 ? '<h4 style="color:blue">'

// if ($kintam1 < 0) {
//     echo '<h4 style="color:green">' . $kintam1 . '</h4>';
// } elseif ($kintam1 = 0) {
//     echo '<h4 style="color:crimson">' . $kintam1 . '</h4>';
// } elseif ($kintam1 > 0) {
//     echo '<h4 style="color:blue">' . $kintam1 . '</h4>';
// } else {
//     echo '---';
// }

// if ($kintam2 < 0) {
//     echo '<h4 style="color:green">' . $kintam2 . '</h4>';
// } elseif ($kintam2 = 0) {
//     echo '<h4 style="color:crimson">' . $kintam2 . '</h4>';
// } else {
//     echo '<h4 style="color:blue">' . $kintam2 . '</h4>';
// }

// if ($kintam3 < 0) {
//     echo '<h4 style="color:green">' . $kintam3 . '</h4>';
// } elseif ($kintam3 = 0) {
//     echo '<h4 style="color:crimson">' . $kintam3 . '</h4>';
// } else {
//     echo '<h4 style="color:blue">' . $kintam3 . '</h4>';
// }

$k1 = rand(-10, 10);
$k2 = rand(-10, 10);
$k3 = rand(-10, 10);

echo "$k1, $k2, $k3"; // sitas vieno skaiciaus nespausdina

if ($k1 < 0) {
    echo '<h4 style="color:green">' . $k1 . '</h4>';
} elseif ($k1 > 0) {
    echo '<h4 style="color:blue">' . $k1 . '</h4>';
} elseif ($k1 = 0) {
    echo '<h4 style="color:red">' . $k1 . '</h4>';
} 

echo '<br>';

$zvakes = rand(5, 3000);
$kaina = 1;
$kaina3proc = 0.97;
$kaina4proc = 0.96;

echo "$zvakes, $kaina, $kaina3proc, $kaina4proc";

echo '<br>';

if ($zvakes >= 2000) {
    echo 'zvakiu kiekis ' . $zvakes . ', mokama suma ' . $zvakes * $kaina4proc;
} elseif ($zvakes >= 1000) {
    echo 'zvakiu kiekis ' . $zvakes . ', mokama suma ' . $zvakes * $kaina3proc;
} else {
    echo 'zvakiu kiekis ' . $zvakes . ', mokama suma ' . $zvakes * $kaina;
}