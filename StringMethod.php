<?php
//STRLEN
echo "<strong>strlen</strong> <br>";
$jargon = "Tetap santai dan berkualitas";
//akan menampilkan panjang variabel $jargon  yaitu  28 karakter 
echo strlen($jargon);

//akan menampilkan panjang string 11
echo strlen("Halo semua!");

echo "<br>";
echo "<br>";
//strtoupper
//meanajdikan sebuah string menjadi huruf besar semua
echo "<strong>strtoupper</strong> <br>";
$statement = "ini gak marah, cuma caps";
//menampilkan INI GAK MARAH, CUMA CAPS
echo strtoupper($statement);

echo "<br>";
echo "<br>";
//strtlower
//menjadikan sebuah string menjadi huruf kecil semua
echo "<strong>strtolower</strong> <br>";
$marah = "INI LAGI MARAH";
//menampilkna ini lagi marah
echo strtolower($marah);

echo "<br>";
echo "<br>";
//strpos
//untuk mengetahuikarakter tersebut berada pada indeks keberapa
$kalimat = "saya sedang belajar php";
$kataYangDiCari = "php";
$posisi = strpos($kalimat, $kataYangDiCari);
//menampilkan 20
//jdi strpos akan mencari nilai indeks huruf awal yang kita cari
echo $posisi;

echo "<br>";
echo "<br>";
//str_word_count
//untuk menghitung jumlah kata
$ucapan = "selamat datang di labfik";
//menampilkan 4 berdasarkan jumlah kata pada variabel kalimat

echo str_word_count($ucapan);  //4

echo "<br>";
echo "<br>";
//substr
//metode untuk mengambil beberapa karakter pada string 
$string = "saya suka php";
//akan menampilkan suka php
echo substr($string, 5, 8);
//akan menmpilkan PH
echo "<br>";
echo substr($string, -3, 2);
