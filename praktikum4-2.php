<?php


function penjumlahan($a, $b)
{
    return $a + $b;
}

// panggil uda kali

echo "jumlah 10 + 90 = " . penjumlahan(10, 90) . "<br/>";
echo "jumlah 10 + -90 = " . penjumlahan(10, -90) . "<br/>";

function hitungKarakter($a){
    return strlen($a);
}

echo hitungKarakter("123456789") . "<br/>";

echo hitungKarakter("ada berapa ini karakternya?");

