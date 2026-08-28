<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
$keliling = kelilingLingkaran(45);
$volume_bola = volumeBola(10);
$volume_tabung = volumeTabung(10, 20);
$volume_kerucut = volumeKerucut(10, 20);

echo "Luas lingkaran = {$luas_tanah}\n";
echo "Keliling lingkaran = {$keliling}\n";
echo "Volume bola = {$volume_bola}\n";
echo "Volume tabung = {$volume_tabung}\n";
echo "Volume kerucut = {$volume_kerucut}\n";