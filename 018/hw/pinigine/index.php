<?php

require_once __DIR__ . '/Pinigine.php';

$p = new Pinigine;

$p->ideti(1);
$p->ideti(87.31);
$p->ideti(0.7);
$p->ideti(22.1);
$p->ideti(1000);

$p->skaiciuoti();
$p->monetos();
$p->banknotai();