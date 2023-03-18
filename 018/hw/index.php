<?php

require __DIR__ . '/Krepsys.php';

echo '<pre>';

$k1 = new Krepsys;

var_dump($k1->grybai);

while ($k1->pririnktuGrybuSvoris < Krepsys::DYDIS) {
    $k1->eitiGrybauti();
}

echo $k1->pririnktuGrybuSvoris . '<br>';

var_dump($k1->grybai);