<?php

class Perhitungan
{
    var int $bilangan1;
    var int $bilangan2;

    function pertambahan(int $bilangan1, int $bilangan2)
    {
        $result = $bilangan1 + $bilangan2;

        echo "Hasilnya adalah : $result" . "</br>";
    }

    function pengurangan(int $bilangan1, int $bilangan2)
    {
        $result = $bilangan1 - $bilangan2;

        echo "Hasilnya adalah : $result" . "</br>";
    }

    function perkalian(int $bilangan1, int $bilangan2)
    {
        $result = $bilangan1 * $bilangan2;

        echo "Hasilnya adalah : $result" . "</br>";
    }

    function pembagian(int $bilangan1, int $bilangan2)
    {
        $result = $bilangan1 / $bilangan2;

        echo "Hasilnya adalah : $result" . "</br>";
    }

    function modulo(int $bilangan1, int $bilangan2)
    {
        $result = $bilangan1 % $bilangan2;

        echo "Hasilnya adalah : $result" . "</br>";
    }
}
