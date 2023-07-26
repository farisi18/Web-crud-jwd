<?php
include ('header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Produk</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <br><br>
  <div class="container">
    <div class="card bg-white text-black">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Formulir Produk</h5>
      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="namaProduk" name="nama_barang" required>
          </div>
          <div class="mb-3">
            <label for="jenisProduk" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" id="jenisProduk" name="jenis_barang" required>
          </div>
          <div class="mb-3">
            <label for="hargaProduk" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="hargaProduk" name="harga_barang" required>
          </div>
          <div class="mb-3">
            <label for="stokProduk" class="form-label">Stok Barang</label>
            <input type="number" class="form-control" id="stokProduk" name="stok_barang" required>
          </div>
          <div class="mb-3">
            <label for="tanggalProduk" class="form-label">Tanggal Input</label>
            <input type="date" class="form-control" id="tanggalInput" name="tanggal_input" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="Submit">Tambahkan</button>
        </form>

        <?php
        // Check jika form tambah data
        if(isset($_POST['nama_barang'])) {
            $nama_barang = $_POST['nama_barang'];
            $jenis_barang = $_POST['jenis_barang'];
            $harga_barang = $_POST['harga_barang'];
            $stok_barang = $_POST['stok_barang'];
            $tanggal_input = $_POST['tanggal_input'];

            // include database 
            include "koneksi.php";

            // Insert data ke tabel
            $tambah_barang = "INSERT INTO barang (nama_barang, jenis_barang, harga_barang, stok_barang, tanggal_input) 
                              VALUES ('$nama_barang', '$jenis_barang', '$harga_barang', '$stok_barang', '$tanggal_input')";

            $kerjakan = mysqli_query($conn, $tambah_barang);
            if ($kerjakan) {
                //  Bila Sukses
                echo "Barang berhasil ditambahkan";
            } else {
                // Bila Gagal
                echo "Gagal bro";
            }
        }
        ?>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
