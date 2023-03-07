<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; url=http://localhost/ciupakabros/010/hwCiklai/hwC8.php">
    <title>Rombas</title>
    <!-- Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). -->
</head>
<body style ="color:rgb(<?= rand(0, 255) ?>,<?= rand(0, 255) ?>,<?= rand(0, 255) ?>);">      
    <!-- REIKIA KIEKVIENOS ZVAIGZTUDES ATSITIKTINES SPALVOS, DABAR VISAS ROMBAS VIENODAS -->
<?php
echo "<pre>";
for ($i = 1; $i < 11; $i++) {
    for ($j = $i; $j < 11; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");       // &nbs = the non-breaking space
    echo "<br>";
}
$n = 11;
for ($i = 11; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");       // reikia 19 ir 27 eilutese span su style
    echo "<br>";
}
echo "</pre>";
?>
</body>
</html>