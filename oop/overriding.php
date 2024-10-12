<?php

// Mendefinisikan class Produk
class Produk 
{
  public $judul,
          $penulis,
          $penerbit,
          $harga;

    // Konstruktor: Digunakan untuk menginisialisasi objek Produk saat dibuat.
    public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}  {$this->harga}";
        return $str;
    }
}

// Kelas CetakInfoProduk: Kelas ini bertugas untuk mencetak informasi Produk.
class CetakInfoProduk
{
    public function cetak(Produk $Produk)
    {
        $str = "{$Produk->judul} | {$Produk->getLabel()} {$Produk->harga}";
        return $str;
    }
}

// Kelas Komik: Subclass dari Produk untuk Produk Komik.
class Komik extends Produk
{
    public $jmlHalaman;

public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
    parent::__construct($tipe, $judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
}


    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman";
        return $str;
    }
}

// Kelas Game: Subclass dari Produk untuk Produk Game.
class Game extends Produk
{

    public $waktuMain;

    public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($tipe, $judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} Jam";
        return $str;
    }
}

$produk1 = new Komik("Komik", "Naruto", "Masashi", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Game", "Uncharted", "Neil", "Sony Computer", 30000, 0, 50);

echo $produk1->getInfoProduk();

echo "<br>";

echo $produk2->getInfoProduk();