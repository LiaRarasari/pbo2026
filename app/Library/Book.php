<?php

class Book
{
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPage;
    public string $author;
    public string $publisher;

    public function showAll(): array
    {
        return [
            "ISBN" => $this->ISBN,
            "title" => $this->title,
            "description" => $this->description,
            "category" => $this->category,
            "language" => $this->language,
            "numberOfPage" => $this->numberOfPage,
            "author" => $this->author,
            "publisher" => $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        if ($this->ISBN == $ISBN) {
            return [
                "ISBN" => $this->ISBN,
                "title" => $this->title,
                "description" => $this->description,
                "category" => $this->category,
                "language" => $this->language,
                "numberOfPage" => $this->numberOfPage,
                "author" => $this->author,
                "publisher" => $this->publisher
            ];
        }

        return [
            "message" => "Buku dengan ISBN tersebut tidak ditemukan"
        ];
    }
}