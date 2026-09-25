<?php

namespace App\Akademik;

interface DapatCuti
{
    public function cuti(): void;

    public function ajukanCuti(int $jumlahHari): void;
}