<?php
require_once 'dbkoneksi.php';

    $iddel = $_GET['iddel'];
    $query = "DELETE FROM kategori_produk WHERE id = ?";
    $delete = $dbh->prepare($query);
    $delete->execute([$iddel]);

    header('location:kategori_produk.php');
?>