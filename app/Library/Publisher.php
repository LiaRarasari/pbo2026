<?php

namespace App\Library;

class Publisher
{
    public string $name;
    public string $address;
    private string $phone;

    public function setPhone(int $phone): void
    {
        $this->phone = (string) $phone;
    }

    public function getPhone(): int
    {
        return (int) $this->phone;
    }
}