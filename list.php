<?php

include "utils.php";

$current_page = 1;
if (isset($_GET['page'])) $current_page = (int)$_GET['page'];
$records_per_page = env("records_per_page", 5);

$daftar_barang = read("barang", $records_per_page, ($current_page - 1) * $records_per_page);
$total_barang = countRow("barang");
$max_page = ceil($total_barang / $records_per_page);
$x = 2;
$error = getError();
$success = getSuccess();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Barang</title>

  <?php include 'partials/css.php' ?>

  <link rel="stylesheet" href="css/list.css">
</head>

<body>
  <?php include 'partials/navigasi.php' ?>

  <div class="container">
    <div class="row">
      <?php if ($error) : ?>
        <div class="col-12">
          <div class="alert alert-danger"><?= $error ?></div>
        </div>
      <?php endif; ?>

      <?php if ($success) : ?>
        <div class="col-12">
          <div class="alert alert-success"><?= $success ?></div>
        </div>
      <?php endif; ?>
    </div>

    <div class="row">
      <div class="col">
        <h2>DATA BARANG</h2>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="modal-radio-tambah" class="btn btn-primary">Tambah Data Barang</label>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <span>Menampilkan <?= count($daftar_barang) ?> dari <?= $total_barang ?> data</span>
      </div>
    </div>

    <?php include 'pagination.php' ?>

    <div class="row justify-content-center">
      <?php foreach ($daftar_barang as $barang) : ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card px-3 py-2">
            <div class="card-header">
              <h5 class="card-title"><?= $barang['nama']; ?></h5>
              <h6 class="card-subtitle text-muted">Merk: <?= $barang['merk']; ?></h6>
            </div>
            <div class="card-body d-flex justify-content-between">
              <p class="card-text">Jumlah: <?= $barang['jumlah']; ?></p>
              <p class="card-text">Rp. <?= number_format($barang['harga'], 2, ",", "."); ?></p>
            </div>
            <div class="card-footer">
              <a href="edit.php?id=<?= $barang['id'] ?>" class="btn btn-secondary">Edit</a>
              <a href="delete.php?id=<?= $barang['id'] ?>" onclick="return confirm('Yakin ingin menghapus data <?= $barang['nama']; ?>')" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php include 'pagination.php' ?>
  </div>

  <div class="modal-container position-fixed">
    <div class="container h-100">
      <div class="row align-items-center justify-content-center position-relative h-100">
        <!-- Modal Tambah -->
        <div class="col-12 col-md-8 position-absolute">
          <input type="checkbox" class="modal-radio" id="modal-radio-tambah">
          <div class="modal">
            <div class="modal-header d-flex justify-content-between">
              <h2>Tambah Barang</h2>
              <label class="btn btn-outline-danger" for="modal-radio-tambah">&times;</label>
            </div>

            <div class="modal-body">
              <form method="post" action="create.php" class="form">
                <div class="mb-3">
                  <label class="form-label" for="nama-ubah">Nama Barang</label>
                  <input type="text" class="form-control" name="nama" id="nama-ubah" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="merk-ubah">Merk Barang</label>
                  <input type="text" class="form-control" name="merk" id="merk-ubah" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="jumlah-ubah">Jumlah Barang</label>
                  <input type="number" class="form-control" name="jumlah" id="jumlah-ubah" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="harga-ubah">Harga Satuan</label>
                  <input type="number" class="form-control" name="harga" step="0.01" id="harga-ubah" required>
                </div>

                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                <label class="btn btn-secondary" for="modal-radio-tambah">Batal</label>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>