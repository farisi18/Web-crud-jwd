<?php
include "header.php";
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stok_barang=$_POST['stok_barang'];
    $tanggal_input =$_POST['tanggal_input'];

    // update user data
    $result = mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang',jenis_barang='$jenis_barang',harga_barang='$harga_barang',stok_barang='$stok_barang',tanggal_input='$tanggal_input' WHERE id_barang=$id");

    // Redirect to homepage to display updated user in list
    header("Location: dataproduk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");

while($r = mysqli_fetch_array($result))
{
   $nama_barang = $r['nama_barang'];
   $jenis_barang = $r['jenis_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
   $tanggal_input = $r['tanggal_input'];
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDIT PRODUK</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <br><br>
  <div class="container">
    <div class="card bg-white text-black">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Edit Produk</h5>
      </div>
      <div class="card-body">
        <!-- Set form action to handle form submission -->
        <form method="post" action="">
          <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Barang</label>
            <!-- Fill input value with PHP variable -->
            <input type="text" class="form-control" id="namaProduk" name="nama_barang" required value="<?php echo $nama_barang; ?>">
          </div>
          <div class="mb-3">
            <label for="jenisProduk" class="form-label">Jenis Barang</label>
            <!-- Fill input value with PHP variable -->
            <input type="text" class="form-control" id="jenisProduk" name="jenis_barang" required value="<?php echo $jenis_barang; ?>">
          </div>
          <div class="mb-3">
            <label for="hargaProduk" class="form-label">Harga Barang</label>
            <!-- Fill input value with PHP variable -->
            <input type="number" class="form-control" id="hargaProduk" name="harga_barang" required value="<?php echo $harga_barang; ?>">
          </div>
          <div class="mb-3">
            <label for="stokProduk" class="form-label">Stok Barang</label>
            <!-- Fill input value with PHP variable -->
            <input type="number" class="form-control" id="stokProduk" name="stok_barang" required value="<?php echo $stok_barang; ?>">
          </div>
          <div class="mb-3">
            <label for="tanggalProduk" class="form-label">Tanggal Input</label>
            <!-- Fill input value with PHP variable -->
            <input type="date" class="form-control" id="tanggalInput" name="tanggal_input" required value="<?php echo $tanggal_input; ?>">
          </div>
          <!-- Add a hidden input to pass the id to the update script -->
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <br>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
        </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
