<?php

//Class Induk(Parent)
class Kendaraan
{

    public $merk;
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
    public function berjalan()
    {
        return $this->merk . " sedang melaju...";
    }
}
// Class Anak (child)mewarisi class kendaraan
class Mobil extends Kendaraan
{
    public $jumlahpintu = 4;
    public function bukapintu()
    {
        return "tania membuka " . $this->jumlahpintu . " pintu mobil " . $this->merk;
    }
}

$mobilRPL = new mobil("rubicon");
echo $mobilRPL->berjalan(); // menggunakan method warisan dari parent
echo "<br>";
echo $mobilRPL->bukapintu(); // menggunakan method milik child sendiri