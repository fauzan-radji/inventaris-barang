<?php include 'utils.php' ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>

  <?php include 'partials/css.php' ?>
  <link rel="stylesheet" href="css/index.css">
</head>

<body class="d-flex flex-column justify-content-center text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 style="font-size: 3.5rem;">Inventaris Barang</h1>
      </div>
    </div>

    <div class="row justify-content-center my-5 pt-3 lh-4" style="font-size: 1.2rem;">
      <?php foreach (env('descriptions') as $paragraph) : ?>
        <div class="col-md-8">
          <p><?= $paragraph ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <?php include 'partials/navigasi.php' ?>
</body>

</html>