<?php

require_once 'app/Library/Author.php';
require_once 'app/Library/Book.php';
require_once 'app/Library/Publisher.php';


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