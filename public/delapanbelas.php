<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

$pegawaiRepo = new PegawaiRepository();

if (isset($_POST['nama'], $_POST['no_hp'], $_POST['alamat'], $_POST['gaji'])) {
    $tendik1 = new TenagaKependidikan(
        rand(1, 1000),
        $_POST['nama'],
        $_POST['no_hp'],
        $_POST['alamat'],
        $_POST['gaji']
    );

    if ($pegawaiRepo->simpanPegawai($tendik1)) {
        echo json_encode([
            'response' => "Data {$tendik1->nama} (Tenaga Kependidikan) berhasil disimpan melalui Repository"
        ]);
    } else {
        echo json_encode([
            'response' => "Gagal menyimpan data {$tendik1->nama}. Cek log error"
        ]);
    }
} else {
    echo json_encode([
        'response' => 'Data POST belum lengkap'
    ]);
}
