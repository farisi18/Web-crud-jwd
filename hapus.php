<?php
include "koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM barang WHERE id_barang=$id");

header("Location:dataproduk.php");
?>