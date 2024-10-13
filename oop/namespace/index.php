<?php 
require_once 'App/init.php';
//Membuat instance Komik dan Game
// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
//Membuat instance CetakInfoProduk
// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
// echo "<hr>";
//Penulisan namespace : namespace Vendor\Namespace\SubNamespace
// new App\Service\User();
// echo "<br>";
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();