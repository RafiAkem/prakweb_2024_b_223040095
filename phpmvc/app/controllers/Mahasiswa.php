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
        Flasher::setFlash('berhasil', ' ditambahkan', 'success');
        header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah berhasil
        exit;
      } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah gagal
        exit;
      }
    }
  }

  public function hapus($id)
  {
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', ' dihapus', 'success');
      header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah berhasil
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah gagal
      exit;
    }
  }

  public function getUbah()
  {
    $id = $_POST['id'];
    $data = $this->model('Mahasiswa_model')->getUbah($id);
    echo json_encode($data); // Return the data as JSON
  }

  public function ubah(){
    if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', ' diubah', 'success');
      header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah berhasil
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa'); // Redirect setelah gagal
      exit;
  }
}

}
