<?php
class Mobil
{
    public $merek;
    public $harga;
    public function __construct($merek, $harga)
    {
        $this->merek = $merek;
        $this->harga = $harga;
    }
}
//membuat objeck dari kelas mobil
$mobil1 = new Mobil("Toyota", "200000");
echo $mobil1->merek . "<br>";
echo $mobil1->harga . "<br>";

$mobil2 = new Mobil("avanza", "10000");
echo $mobil2->merek . "<br>";
echo $mobil2->harga . "<br>";
