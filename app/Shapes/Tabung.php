<?php

namespace App\Shapes;

class Tabung
{
    const PHI = 3.14;

    public float $jari_jari;
    public float $tinggi;

    public function volume(): float
    {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}