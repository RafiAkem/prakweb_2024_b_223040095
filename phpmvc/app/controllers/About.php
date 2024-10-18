<?php
class About
{
  public function index($nama = 'Rafi ', $pekerjaan = 'mahasiswa ')
  {
    // Menambahkan log untuk memastikan metode ini dipanggil
    error_log("Metode index dipanggil dengan nama: $nama dan pekerjaan: $pekerjaan");
    
    echo "halo saya " . $nama . "saya adalah seorang " . $pekerjaan;
  }
  public function page()
  {
    echo 'About/page';
  }
}
