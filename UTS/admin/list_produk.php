<?php
require_once 'dbkoneksi.php';
require_once "header.php";
require_once "sidebar.php";

?>
<?php
$sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
$rs = $dbh->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section style="background-color: white;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <a style="background-color: #343a40" class="btn text-white" href="form_produk.php" role="button">Create Produk</a><br><br>
                        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Min Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor  = 1;
                                foreach ($rs as $row) {
                                ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $row['kode'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['harga_jual'] ?></td>
                                        <td><?= $row['harga_beli'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['min_stok'] ?></td>
                                        <td><?= $row['deskripsi'] ?></td>
                                        <td><?= $row['kategori'] ?></td>
                                        <td>
                                            <a style="background-color: #343a40; border-style: solid; border-color: cyan" class="btn text-white" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: yellow" class="btn text-white" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: red" class="btn text-white" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>