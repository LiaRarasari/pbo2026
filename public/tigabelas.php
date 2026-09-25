<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;

$staf1 = new TenagaKependidikan(
    102,
    "Siti Aminah",
    "08123456789",
    "Jl. Merdeka No. 5",
    5000000
);

$staf1->cekIn();
$staf1->cuti();

echo "Gaji pokok: Rp" . $staf1->getGajiPokok();