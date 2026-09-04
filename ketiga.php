<?php

class Lingkaran
{
    const PHI = 3.14;
    public float $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas(): float
    {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class setengahLingkaran
{
    const PHI = 3.14;
    public float $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas(): float
    {
        return (1 / 2) * self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float
    {
        return self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public float $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume(): float
    {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume(): float
    {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume(): float
    {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$nasi_rempah = new setengahLingkaran(4);

echo "=== Setengah Lingkaran ===" . PHP_EOL;
echo "Jari-jari: " . $nasi_rempah->jari_jari . " cm" . PHP_EOL;
echo "Luas: " . $nasi_rempah->luas() . " cm2" . PHP_EOL;
echo "Keliling: " . $nasi_rempah->keliling() . " cm" . PHP_EOL;


$lingkaran = new Lingkaran(7);

echo PHP_EOL;
echo "=== Lingkaran ===" . PHP_EOL;
echo "Jari-jari: " . $lingkaran->jari_jari . " cm" . PHP_EOL;
echo "Luas: " . $lingkaran->luas() . " cm2" . PHP_EOL;
echo "Keliling: " . $lingkaran->keliling() . " cm" . PHP_EOL;


$bola = new Bola(7);

echo PHP_EOL;
echo "=== Bola ===" . PHP_EOL;
echo "Jari-jari: " . $bola->jari_jari . " cm" . PHP_EOL;
echo "Volume: " . $bola->volume() . " cm3" . PHP_EOL;


$tabung = new Tabung(7, 10);

echo PHP_EOL;
echo "=== Tabung ===" . PHP_EOL;
echo "Jari-jari: " . $tabung->jari_jari . " cm" . PHP_EOL;
echo "Tinggi: " . $tabung->tinggi . " cm" . PHP_EOL;
echo "Volume: " . $tabung->volume() . " cm3" . PHP_EOL;


$kerucut = new Kerucut(7, 10);

echo PHP_EOL;
echo "=== Kerucut ===" . PHP_EOL;
echo "Jari-jari: " . $kerucut->jari_jari . " cm" . PHP_EOL;
echo "Tinggi: " . $kerucut->tinggi . " cm" . PHP_EOL;
echo "Volume: " . $kerucut->volume() . " cm3" . PHP_EOL;