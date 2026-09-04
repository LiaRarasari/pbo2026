<?php

class Lingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari): float
    {
        return self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari): float
    {
        return 2 * self::PHI * $jari_jari;
    }
}

class setengahLingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari): float
    {
        return (1 / 2) * self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari): float
    {
        return self::PHI * $jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public function volume($jari_jari): float
    {
        return (4 / 3) * self::PHI * pow($jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi): float
    {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi): float
    {
        return (1 / 3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}


$nasi_rempah = new setengahLingkaran();

$jari_jari = 4;

echo "Luas setengah lingkaran: "
    . $nasi_rempah->luas($jari_jari)
    . " cm2" . PHP_EOL;

echo "Keliling setengah lingkaran: "
    . $nasi_rempah->keliling($jari_jari)
    . " cm" . PHP_EOL;