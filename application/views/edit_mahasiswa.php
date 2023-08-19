<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
  </head>
  <body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>EDIT MAHASISWA</span>
            <a href="<?php echo base_url(); ?>" class="btn btn-primary">Kembali</a>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url() ?>index.php/mahasiswa/update" method="POST">
            <!-- Input untuk NIM -->
            <div class="form-group">
              <label>NIM</label>
              <input type="text" name="nim" value="<?php echo $data_mahasiswa->nim ?>" placeholder="Masukkan NIM Mahasiswa" class="form-control">
              <input type="hidden" name="id_mahasiswa" value="<?php echo $data_mahasiswa->id_mahasiswa ?>">
            </div>

            <!-- Input untuk Nama Mahasiswa -->
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" value="<?php echo $data_mahasiswa->nama_lengkap ?>" placeholder="Masukkan Nama Mahasiswa" class="form-control">
            </div>
            <!-- Input untuk Alamat Mahasiswa -->
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Mahasiswa" rows="4"><?php echo $data_mahasiswa->alamat ?></textarea>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>