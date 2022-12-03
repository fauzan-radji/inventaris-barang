<?php
include "utils.php";

if (isset($_POST['submit'])) {
  unset($_POST['submit']);

  (create('barang', $_POST, "ssnn"))
    ? setSuccess("Data berhasil diinput")
    : setError("Data gagal diinput");
}

redirect('list.php');
