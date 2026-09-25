<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dosen;

$dosen1 = new Dosen(
    123456,
    "Budi Hartono",
    "081234567890",
    "Pontianak",
    "1234567890"
);

$dosen1->cekIn();

echo "NIDN: " . $dosen1->getNidn();