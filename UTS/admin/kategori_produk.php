<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

$sql = "SELECT * FROM kategori_produk" ;
$rs = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kategori</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <a style="background-color: #343a40" class="btn text-white" href="form_kategori.php" role="button">Create Kategori</a><br><br>
                            <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
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
                                            <td><?= $row['nama'] ?></td>
                                            <td>
                                                <a class="btn btn-info" href="view_kategori.php?id=<?= $row['id'] ?>">View</a>
                                                <a class="btn btn-warning" href="form_kategori.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-danger" href="delete_kategori.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Kategori <?= $row['nama'] ?>?')) {return false}">Delete</a>
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
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>