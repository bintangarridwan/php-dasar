<?php

require_once "data/Perhitungan.php";

// $bilangan1 = 10;
// $bilangan2 = 10;

// $result = $bilangan1 + $bilangan2;

// echo "$bilangan1" . PHP_EOL;
// echo "+" . PHP_EOL;
// echo "$bilangan2" . PHP_EOL;
// echo "Hasil nya adalah : $result" . PHP_EOL;

echo "Pertambahan </br>" . PHP_EOL;
$operator = new Perhitungan();
$operator->pertambahan(10, 20);

echo "Pengurangan </br>";
$operator->pengurangan(50, 30);

echo "Perkalian </br>";
$operator->perkalian(5, 50);

echo "Pembagian </br>";
$operator->pembagian(10, 2);

echo "Modulo </br>";
$operator->modulo(100, 3);
