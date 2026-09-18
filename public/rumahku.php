<?php
require_once __DIR__ . '/../app/Site/HomePage.php';
require_once __DIR__ . '/../app/Site/Admin/HomePage.php';

$hp = new \App\Site\Guest\HomePage();
$hp->tampil();