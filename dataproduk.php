<?php 
require "header.php";
?>

<div class="container">
  <div class="row">
    <div class="col-xl-12">
      <h1><p style="background: oceanblue; color:black;"> DATA PRODUK </p></h1>
      <table class="table table-striped table-success">
        <br><br>
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID BARANG</th>
            <th scope="col">NAMA BARANG</th>
            <th scope="col">JENIS BARANG</th>
            <th scope="col">HARGA BARANG</th>
            <th scope="col">STOCK BARANG</th>
            <th scope="col">TANGGAL INPUT</th>
            <th scope="col">OPSI</th>
            <th></th>
          </tr>
        </thead>

        <?php 
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($conn, "select * from barang");
        while($r = mysqli_fetch_array($data)){
          $id_barang = $r['id_barang'];
          $nama_barang = $r['nama_barang'];
          $jenis_barang = $r['jenis_barang'];
          $harga_barang = $r['harga_barang'];
          $stok_barang = $r['stok_barang'];
          $tanggal_input = $r['tanggal_input'];
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $id_barang; ?></td>
          <td><?php echo $nama_barang; ?></td>
          <td><?php echo $jenis_barang; ?></td>
          <td><?php echo $harga_barang; ?></td>
          <td><?php echo $stok_barang; ?></td>
          <td><?php echo $tanggal_input; ?></td>
          <td align="right" width="70px">
            <!-- Gunakan tombol biru untuk Edit -->
            <a href="edit.php?id=<?php echo $id_barang;?>" class="btn btn-primary">Edit</a>
          </td>
          <td align="right" width="70px">
            <!-- Gunakan tombol merah untuk Hapus -->
            <a href="hapus.php?id=<?php echo $id_barang;?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php 
        }
        ?>

      </table>
    </div>
  </div>
</div>
