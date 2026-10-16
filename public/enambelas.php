<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnector;
use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

$pegawaiRepo = new PegawaiRepository();

$dosen1 = new Dosen(
    1236,
    "Dr. Dian Prawira",
    "0851121212",
    "Jl. Veteran",
    "234234"
);

$dosen1->jumlah_sks = 18;

$tendik1 = new TenagaKependidikan(
    1237,
    "Linia Dani",
    "0855121212",
    "Jl. Purnama Tanjung",
    7000000
);

if ($pegawaiRepo->simpanPegawai($dosen1)) {
    echo "Data dosen berhasil disimpan.\n";
} else {
    echo "Data dosen gagal disimpan.\n";
}

if ($pegawaiRepo->simpanPegawai($tendik1)) {
    echo "Data tenaga kependidikan berhasil disimpan.\n";
} else {
    echo "Data tenaga kependidikan gagal disimpan.\n";
}
