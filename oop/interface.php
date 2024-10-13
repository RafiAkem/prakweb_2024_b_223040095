<?php 
interface InfoProduk
{
    public function getInfoProduk();
}
abstract class Produk 
{
    // Mendefinisikan class Produk
  protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    // Konstruktor untuk menginisialisasi objek Produk
    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) 
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    //setter dan getter
    public function setjudul($judul){ 
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    
    // Metode untuk mendapatkan label Produk
    public function getLabel() 
    {
        return "$this->penulis, $this->penerbit";
    }
    abstract public function getInfo();
}
class Komik extends Produk implements InfoProduk
{
    public $jumlahHalaman;
    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) 
    {
        // Memanggil konstruktor parent untuk inisialisasi nilai
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jmlHalaman;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk() 
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}
class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
    public function getInfoProduk() 
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}
// Kelas untuk mencetak informasi Produk
class CetakInfoProduk 
{
    public $daftarProduk = array();
    public function tambahProduk(Produk $produk) 
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak() 
    {
        $str  = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) 
        {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}
//Membuat instance Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
//Membuat instance CetakInfoProduk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();