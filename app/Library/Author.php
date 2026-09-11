<?php

class Author
{
    public string $name;
    public string $description;

    public function show($type): array
    {
        if ($type == "name") {
            return [
                "name" => $this->name
            ];
        } elseif ($type == "description") {
            return [
                "description" => $this->description
            ];
        }

        return [
            "name" => $this->name,
            "description" => $this->description
        ];
    }
}