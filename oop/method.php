<?php
class lingkaran
{
    public $jari_jari;
    public function hitungLuas()
    {
        return pi() * pow($this->jari_jari, 2);
    }
    public function hitungKeliling()
    {
        return 2 * pi() * $this->jari_jari;
    }
}

$linkaran = new lingkaran();
$linkaran->jari_jari = 5;

//memanggil metode
echo "luas lingkaran: " . $linkaran->hitungLuas() . "<br>";
echo "kelilling lingkaran: " . $linkaran->hitungKeliling() . "<br>";
