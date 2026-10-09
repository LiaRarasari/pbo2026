
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;

$dosen1 = new Dosen(101, "Budi Hartono", "0812345678", "Jl. Cendrawasih No. 10", "198012345");
$tendik1 = new TenagaKependidikan(201, "Ani Suryani", "0815678901", "Jl. Merpati No. 5", 5000000);

$dosen1->bekerja();
$tendik1->bekerja();

echo "Tunjangan kinerja dosen: Rp" . $dosen1->hitungTunjanganKinerja() . "<br>";
echo "Tunjangan kinerja tenaga kependidikan: Rp" . $tendik1->hitungTunjanganKinerja() . "<br>";