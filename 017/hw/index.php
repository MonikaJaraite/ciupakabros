<?php

require __DIR__ . '/Kibiras1.php';

echo '<pre>';

$KibirasY = new Kibiras1; 

echo "\n\n";

$KibirasY->pridetiDaugAkmenu(5);
$KibirasY->pridetiDaugAkmenu(3);
$KibirasY->pridetiDaugAkmenu(2);
$KibirasY->prideti1Akmeni();

echo 'Pririnkta akmenu: ' .  $KibirasY->kiekPririnktaAkmenu();