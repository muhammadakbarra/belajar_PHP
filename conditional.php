<?php
$usia = 70;
if ($usia >= 60) {
    echo "anda memasuki usia lansia";
}
echo "<br>";

//if else statement
$umur = 50;
if ($umur >= 60) {
    echo "Anda sudah memasuki usia lansia";
} else {
    echo "anda belum memasuki usia lansia";
}
//else
echo "<br>";
echo "<br>";
//if elseif else
$age = 20;
if ($age >= 60) {
    echo "Anda sudah memasuki usia lamsia";
} else if ($age >= 26 && $age < 60) {
    echo "Anda sudah memasuki usia dewasa";
} else if ($age >= 17 && $age < 26) {
    echo "Anda sudah memasuki usia remaja";
} else {
    echo "Anda belum memasuki usia balita";
}
