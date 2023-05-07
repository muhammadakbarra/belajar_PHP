<?php
//barikut adalah contoh function tanpa parameter
function baris()
{
    return "=============<br>";
}
echo baris();
echo baris();
echo baris();

//end
//star contoh function dengan parameter
function pengenalanDiri($nama)
{
    return "hello perkenalkan nama saya " . $nama . "<br>";
}
echo pengenalanDiri("akbar");
echo pengenalanDiri("ica");

echo baris();
echo "<br";
//end
//star contoh function dengan lebih dari 1 parameter
function perkalian($num1, $num2)
{
    $kali = $num1 * $num2;
    return "hasil dari " . $num1 . " di kali " . $num2 . " adalah " . $kali . "<br>";
}
echo perkalian(2, 4);
echo perkalian(5, 7);
