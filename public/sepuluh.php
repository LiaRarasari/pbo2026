<?php
require_once __DIR__ . '/../app/Site/Admin/HomePage.php';
require_once __DIR__ . '/../app/Site/Admin/ManajemenArtikel.php';

use App\Site\Admin\HomePage;
use App\Site\Admin\ManajemenArtikel;

$hp = new HomePage();
$hp->tampil();

$ma = new ManajemenArtikel();
$ma->tambah();