<?php

// Class perent
class Profesi
{
    public function bekerja()
    {
        return "Melakukan pekerjaan umum...";
    }
}

// Class child 1
class Guru extends profesi
{
    // Method Overriding (menimpa method parent)
    public function bekerja()
    {
        return "pergi ke kelas mengajar siswa SMK.";
    }
}

// Class Child 2
class programmer extends profesi
{
    //public function overriding
    public function bekerja()
    {
        return "membuka vs code, mengetik kode php, dan memakan cihu rinrin.";
    }
}
$pakGuru = new Guru();
$anakRPL = new programmer();
echo $pakGuru->bekerja(); // Output: pergi ke kelas dan mengajar siswa SMK.
echo "<br>";
echo $anakRPL->bekerja(); // Output: membuka vs code, mengetik kode PHP, dan meminum kopi.
