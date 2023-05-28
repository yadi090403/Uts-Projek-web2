<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

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
                    <h1>Data Pesanan Pelanggan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">No.HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>muslimr</td>
                                <td>bangkalan</td>
                                <td>2023-01-01</td>
                                <td>T - Shirt Kamisato Ayaka</td>
                                <td>1</td>
                                <td>08826376</td>
                                <td>muslim.18@gmail.com</td>
                                <td>Minimal Bajunya Wangy ya min !</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>sakur</td>
                                <td>sampang</td>
                                <td>2023-03-20</td>
                                <td>Jaket Kamisato Ayaka</td>
                                <td>1</td>
                                <td>08951765</td>
                                <td>ayato.18@gmail.com</td>
                                <td>Tulis di paket nya nanti, kalo ini barang giveaway !</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>mahmud_abbas</td>
                                <td>sampang</td>
                                <td>2023-01-03</td>
                                <td>Action Figure Ayaka</td>
                                <td>1</td>
                                <td>089516633278</td>
                                <td>mahmud.18@gmail.com</td>
                                <td>Jangan sampe RUSAK barangnya !</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>mahmudi</td>
                                <td>pamekasan</td>
                                <td>2023-04-09</td>
                                <td>Action Figure Ayaka</td>
                                <td>1</td>
                                <td>08962343</td>
                                <td>yadiTzed00@gmail.com</td>
                                <td>1 hari kudu sampe paketnya ya bang!</td>
                            </tr>
                        </tbody>
                    </table>
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