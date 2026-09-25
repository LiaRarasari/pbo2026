<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dekan;

$dekan1 = new Dekan(
    101,
    "Budi Hartono",
    "08123456789",
    "Jl. Cendrawasih No. 10",
    "198012345"
);

$dekan1->mengesahkanSuratIjinMagang();