<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <button type="button" class="btn btn-dark mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br>
      <h3>Daftar Mahasiswa</h3>
      <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <?= $mhs['nama']; ?>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?> " class="badge text-bg-dark"> Detail</a>
            </li>
          <?php endforeach; ?>
          </ul>
    </div>
  </div>
  </div>

  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" required>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Planologi">Teknik Planologi</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
