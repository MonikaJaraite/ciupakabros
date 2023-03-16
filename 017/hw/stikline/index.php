<?php

require __DIR__ . '/Stikline.php';

$s200 = new Stikline(200);
$s150 = new Stikine(150);
$s100 = new Stikline(100);
var_dump($s200);


$s150->ipilti($s200->ispilti());

echo $s200->kiekis . '<br>';