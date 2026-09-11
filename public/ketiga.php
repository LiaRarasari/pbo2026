<?php

require_once '../app/Shapes/Lingkaran.php';
require_once '../app/Shapes/Bola.php';
require_once '../app/Shapes/Tabung.php';
require_once '../app/Shapes/Kerucut.php';

$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7;

$bola = new Bola();
$bola->jari_jari = 7;

$tabung = new Tabung();
$tabung->jari_jari = 7;
$tabung->tinggi = 10;

$kerucut = new Kerucut();
$kerucut->jari_jari = 7;
$kerucut->tinggi = 10;

echo "Luas Lingkaran: " . $lingkaran->luas() . PHP_EOL;
echo "Keliling Lingkaran: " . $lingkaran->keliling() . PHP_EOL;
echo "Volume Bola: " . $bola->volume() . PHP_EOL;
echo "Volume Tabung: " . $tabung->volume() . PHP_EOL;
echo "Volume Kerucut: " . $kerucut->volume() . PHP_EOL;