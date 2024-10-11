<?php

// Mendefinisikan class Produk
class Produk 
{
  public $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain;

    // Konstruktor: Digunakan untuk menginisialisasi objek Produk saat dibuat.
    public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
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
    public function getInfoProduk()
    {
        $str = "Komik: {$this->judul} | {$this->getLabel()} {$this->harga} - {$this->jmlHalaman} halaman";
        return $str;
    }
}

// Kelas Game: Subclass dari Produk untuk Produk Game.
class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game: {$this->judul} | {$this->getLabel()} {$this->harga} - {$this->waktuMain} Jam";
        return $str;
    }
}

$produk1 = new Komik("Komik", "Naruto", "Masashi", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Game", "Uncharted", "Neil", "Sony Computer", 30000, 0, 50);

echo $produk1->getInfoProduk();