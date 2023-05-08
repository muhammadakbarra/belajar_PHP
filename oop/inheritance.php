<?php
class Kendaraan
{
    protected $merek;
    public function __construct($merek)
    {
        $this->merek = $merek;
    }
    public function getMerek()
    {
        return $this->merek;
    }
}
class Mobil extends Kendaraan
{
    private $harga;
    public function __construct($merek, $harga)
    {
        parent::__construct($merek);
        $this->harga = $harga;
    }
    public function getInfo()
    {
        return "Merek: " . $this->getMerek() . ", Harga: " . $this->harga;
    }
}
//membuat objek dari kelas mobil 
$mobil = new Mobil("Toyota", 200000000);

//memanggil metode
echo $mobil->getInfo();
