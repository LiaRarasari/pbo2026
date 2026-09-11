<?php

class Kerucut
{
    const PHI = 3.14;

    public float $jari_jari;
    public float $tinggi;

    public function volume(): float
    {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}