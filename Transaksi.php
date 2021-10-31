<?php
require 'fungsi.php';

if (isset($_POST["submit"])) {
    if (transaksi($_POST) > 0) {
        echo "
      <script>
      alert('Transaksi Berhasil');
      document.location.href = 'index.php';
      </script>
      ";
    } else {
        echo "
      <script>
      alert('Transaksi Gagal');
      document.location.href = 'index.php';
      </script>
      ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>

<body>
    <div class="container">
    <h1>Transaksi</h1>
    <form action="" method="post" enctype="multipart/form-data" class="form_login">
        <ul>
            <li>
                <label for="Status">Status :</label>
                <select  name="Status" id="Status">
                    <option value="Income">Income</option>
                    <option value="Outcome">Outcome</option>
                </select>
            </li>
            <br>
            <li>
                <label for="Nominal">Nominal :</label>
                <input type="number" name="Nominal" id="Nominal" placeholder="angka ribuan hilangkan saja">
            </li>
            <br>
            <li>
                <label for="TGL">Tanggal Transaksi :</label>
                <input type="date" name="Tgl_Transaksi" id="TGL">
            </li>
            <br>
            <button type="submit" name="submit" class="kirim" onmouseover="" style="cursor: pointer;">Kirim</button>
            <a class="kembali" href="index.php">kembali</a>
        </ul>
    </form>
    </div>
</body>

</html>