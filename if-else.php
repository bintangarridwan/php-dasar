<?php

$nilai1 = 75;
$nilai2 = 75;

if ($nilai1 >= 90 | $nilai2 == 90) {
    echo "Selamat Kamu Dapat Nilai A";
} else if ($nilai1 >= 75 | $nilai2 == 75) {
    echo "Kamu Dapat Nilai B, belajar lagi ya";
} else if ($nilai1 >= 60 | $nilai2 == 60) {
    echo "Kamu Dapat Nilai C, Belajar Lebih Giat Lagi";
} else {
    echo "Kamu Tidak Lulus";
}
