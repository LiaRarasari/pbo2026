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


$author = new Author();
$author->name = "Andrea Hirata";
$author->description = "Penulis novel terkenal Indonesia";


$publisher = new Publisher();
$publisher->name = "Bentang Pustaka";
$publisher->address = "Yogyakarta";
$publisher->setPhone(81234567890);


$book = new Book();
$book->ISBN = 123456;
$book->title = "Laskar Pelangi";
$book->description = "Novel tentang kehidupan dan pendidikan";
$book->category = "Novel";
$book->language = "Indonesia";
$book->numberOfPage = 529;
$book->author = $author->name;
$book->publisher = $publisher->name;


echo "=== DATA AUTHOR ===" . PHP_EOL;
print_r($author->show("name"));
print_r($author->show("description"));


echo PHP_EOL . "=== DATA PUBLISHER ===" . PHP_EOL;
echo "Nama: " . $publisher->name . PHP_EOL;
echo "Alamat: " . $publisher->address . PHP_EOL;
echo "Telepon: " . $publisher->getPhone() . PHP_EOL;


echo PHP_EOL . "=== DATA BOOK ===" . PHP_EOL;
print_r($book->showAll());


echo PHP_EOL . "=== DETAIL BOOK ===" . PHP_EOL;
print_r($book->detail(123456));