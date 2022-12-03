<?php
include 'utils.php';

$id = $_GET['id'];

$result = readOne('barang', $id);
$nama = $result['nama'];
$merk = $result['merk'];
$jumlah = $result['jumlah'];
$harga = $result['harga'];

$error = getError();
$success = getSuccess();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>

  <?php include 'partials/css.php' ?>
</head>

<body>
  <?php include 'partials/navigasi.php' ?>

  <div class="container">
    <div class="row">
      <?php if ($error) : ?>
        <div class="col-12">
          <div class="alert bg-danger"><?= $error ?></div>
        </div>
      <?php endif; ?>

      <?php if ($success) : ?>
        <div class="col-12">
          <div class="alert bg-success"><?= $success ?></div>
        </div>
      <?php endif; ?>
    </div>

    <div class="row">
      <div class="col">
        <h2>EDIT DATA BARANG</h2>
      </div>
    </div>

    <form method="post" action="update.php" class="form">
      <input type="hidden" name="id" value="<?= $id ?>">

      <div class="mb-3">
        <label class="form-label" for="nama-ubah">Nama Barang</label>
        <input type="text" class="form-control" name="nama" id="nama-ubah" value="<?= $nama ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="merk-ubah">Merk Barang</label>
        <input type="text" class="form-control" name="merk" id="merk-ubah" value="<?= $merk ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="jumlah-ubah">Jumlah Barang</label>
        <input type="number" class="form-control" name="jumlah" id="jumlah-ubah" value="<?= $jumlah ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="harga-ubah">Harga Satuan</label>
        <input type="number" class="form-control" name="harga" step="0.01" id="harga-ubah" value="<?= $harga ?>" required>
      </div>

      <div class="d-flex justify-content-end gapx-2">
        <label class="btn btn-secondary" for="modal-radio-tambah">Batal</label>
        <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>