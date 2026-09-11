<?php
date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');

if ($waktu > 19) {
    $sapaan = "Selamat malam";
} elseif ($waktu > 15) {
    $sapaan = "Selamat sore";
} elseif ($waktu > 11) {
    $sapaan = "Selamat siang";
} elseif ($waktu > 5) {
    $sapaan = "Selamat pagi";
}

echo "{$sapaan}, {$nama} sekarang pukul {$waktu}\n";