
<?php

// Class Parent
class Rental {
    private $hargaSewaPerHari;

    public function setHargaSewaPerHari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    public function getHargaSewaPerHari() {
        return $this->hargaSewaPerHari;
    }

    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

// Class Child Rental Mobil
class RentalMobil extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 10;
        } else {
            return 0;
        }
    }
}

// Class Child Rental Motor
class RentalMotor extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 5;
        } else {
            return 0;
        }
    }
}

// Membuat objek Rental Mobil
$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(300000);

$lamaMobil = 4;
$totalMobil = $mobil->getHargaSewaPerHari() * $lamaMobil;
$diskonMobil = $mobil->hitungDiskon($lamaMobil);
$bayarMobil = $totalMobil - ($totalMobil * $diskonMobil / 100);

// Membuat objek Rental Motor
$motor = new RentalMotor();
$motor->setHargaSewaPerHari(100000);

$lamaMotor = 4;
$totalMotor = $motor->getHargaSewaPerHari() * $lamaMotor;
$diskonMotor = $motor->hitungDiskon($lamaMotor);
$bayarMotor = $totalMotor - ($totalMotor * $diskonMotor / 100);

// Menampilkan hasil
echo "<h2>Rental Kendaraan</h2>";

echo "<h3>Rental Mobil</h3>";
echo "Harga per hari: Rp " . $mobil->getHargaSewaPerHari() . "<br>";
echo "Lama sewa: " . $lamaMobil . " hari<br>";
echo "Diskon: " . $diskonMobil . "%<br>";
echo "Total bayar: Rp " . $bayarMobil . "<br>";

echo "<hr>";

echo "<h3>Rental Motor</h3>";
echo "Harga per hari: Rp " . $motor->getHargaSewaPerHari() . "<br>";
echo "Lama sewa: " . $lamaMotor . " hari<br>";
echo "Diskon: " . $diskonMotor . "%<br>";
echo "Total bayar: Rp " . $bayarMotor . "<br>";

?>
