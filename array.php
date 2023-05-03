<?php
//array php asosiatif
//berbeda dengan array biasa yang menggunakan angka untuk menandai indeks
//array asosiatif menggunakan  key sebagai indeks yang dapat kita cari
//penulisan array asosiatif yaitu dengan memasangkan key dan value dengan pemisah tanda panah => 
echo "<h1>Array Asosiatif</h1>";
$siswa1 = ["nama" => "akbar", "kelas" => "laravel", "nilai" => 70];
print_r($siswa1);

//menambahkan key value baru ke array $siswa1
$siswa1["nama"] = "ikang";
echo "<br>";
print_r($siswa1);

echo "<br>";
echo "<br>";
//array multidimentional 
$arrayMulti = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
/*
maka sebagai gambaran, indeks dari array tersebut adalah 
[
    [(0,0), (0,1), (0, 2)],
    [(1,0), (1,1), (1, 2)],
    [(2,0), (2,1), (2, 2)],
]
*/
