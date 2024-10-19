<?php
class Mahasiswa extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Ambil data dari formulir
      $data = [
        'nama' => $_POST['nama'],
        'nrp' => $_POST['nrp'],
        'email' => $_POST['email'],
        'jurusan' => $_POST['jurusan']
      ];

      // Panggil model untuk menambah data
      if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($data) > 0) {
        header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah berhasil
        exit;
      } else {
        // Tangani kesalahan jika gagal
        echo "Data gagal ditambahkan.";
      }
    }
  }
}
