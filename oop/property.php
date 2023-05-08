<?php
class Mobil
{
    public $merek;
    private $harga;
    protected $warna;

    public function __construct($merek, $harga, $warna)
    {
        $this->merek = $merek;
        $this->harga = $harga;
        $this->warna = $warna;
    }
}
class MobilSport
{
    public function gantiWarna($warna)
    {
        return "wana mobil adalah : " . $this->warna = $warna . "<br";
    }
    public function gantiMerek($merek)
    {
        return "ganti merek: " . $this->merek = $merek . "<br>";
    }
}
$mobil = new Mobil("Toyota", 200000000, "Merah");
echo "Merek mobil: " . $mobil->merek . "<br>";
//echo "Warna mobil: ". $mobil->warna . "<br>"; //error karena properti protected
//echo "harga mobil: ".$mobil->harga ."<br>"; //erorr karena properti private

$mobilSport = new MobilSport("Ferrari", 1000000000, "Biru");
echo "Merek Mobil: " . $mobilSport->gantiMerek("lambo") . "<br>";
echo $mobilSport->gantiWarna("merah");
//echo "harga mobil: ". $mobil->harga . "<br"; //error karena properti private
