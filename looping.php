<?php

$number = 1;

for (; $number <= 10; $number++) {
    echo "Ini menggunakan for Nomor Ke- $number </br>" . PHP_EOL;

    if ($number == 8) {
        break;
    }
}

$number2 = 1;
do {
    echo "Ini menggunakan do while Nomor Ke - $number2 </br>" . PHP_EOL;
    $number2++;
} while ($number2 <= 10);

$angkaa = array(2, 4, 6, 8, 10);

foreach ($angkaa as $angka) {
    echo "Ini menggunakan foreach $angka </br>" . PHP_EOL;
}
