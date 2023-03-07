<?php

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$manoVardas = 'Monika';
$manoPavarde = 'Jara';
$manoGimimoMetai = 1981;
$sieMetai = 2023;

$pasisveikinimas = 'Aš esu ' . $manoVardas . ' ' . $manoPavarde . '. Man yra ' . $sieMetai - $manoGimimoMetai . ' metai(ų).';

echo "<h2>$pasisveikinimas</h2>"; // Aš esu Monika Jara. Man yra 42 metai(ų).

echo '<br>';

// 2. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

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

// 3. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

$rand1 = rand(0, 25);
$rand2 = rand(0, 25);
$rand3 = rand(0, 25);

echo "$rand1, $rand2, $rand3";

echo '<br>';

$result = $rand1 + $rand2 + $rand3 - max($rand1, $rand2, $rand3) - min($rand1, $rand2, $rand3);

echo "<h3>$result</h3>";

echo '<br>';

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "$a, $b, $c";

$trikampis = $a + $b <= $c || $b + $c <= $a || $c + $a <= $b ? 'trikampi sudaryti neimanoma' : 'trikampi sudaryti galima';

echo '<br>';

echo $trikampis;

echo '<br>';

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

// sprendimas faile hw5.php

// $kintamasis1 = rand(0, 2);
// $kintamasis2 = rand(0, 2);
// $kintamasis3 = rand(0, 2);
// $kintamasis4 = rand(0, 2);

// $kintamasisBendras = "$kintamasis1, $kintamasis2, $kintamasis3, $kintamasis4"; // sita reikia pabaigti

echo '<br>';

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$randomH3 = rand(1, 6);

echo "<h3>$randomH3</h3>";

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

$kintam1 = rand(-10, 10);
$kintam2 = rand(-10, 10);
$kintam3 = rand(-10, 10);

echo "$kintam1, $kintam2, $kintam3";

if ($kintam1 < 0) {
    echo '<h4 style="color:green">' . $kintam1 . '</h4>';
} elseif ($kintam1 == 0) {
    echo '<h4 style="color:crimson">' . $kintam1 . '</h4>';
} elseif ($kintam1 > 0) {
    echo '<h4 style="color:blue">' . $kintam1 . '</h4>';
} else {
    echo '---';
}

if ($kintam2 < 0) {
    echo '<h4 style="color:green">' . $kintam2 . '</h4>';
} elseif ($kintam2 == 0) {
    echo '<h4 style="color:crimson">' . $kintam2 . '</h4>';
} else {
    echo '<h4 style="color:blue">' . $kintam2 . '</h4>';
}

if ($kintam3 < 0) {
    echo '<h4 style="color:green">' . $kintam3 . '</h4>';
} elseif ($kintam3 == 0) {
    echo '<h4 style="color:crimson">' . $kintam3 . '</h4>';
} else {
    echo '<h4 style="color:blue">' . $kintam3 . '</h4>';
}

echo '<br>';

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

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