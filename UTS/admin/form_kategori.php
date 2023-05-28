<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

//membuat kondisi untuk mengedit data pelanggan 
if (!empty($_GET['idedit'])) {
  $edit = $_GET['idedit'];
  //untuk menampilkan data dengan perintah select
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $dbh->prepare($sql);
  //intruksi untuk menjalankan program 
  $st->execute([$edit]);
  //untuk menampilkan baris di setiap data 
  $row = $st->fetch();
} else {
  //untuk membuat data baru 
  $row = [];
};
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h1 align="center">Form Kategori Produk</h1>
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
              <form method="POST" action="proses_kategori.php">
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Kategori</label>
                  <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <?php
                    //melakukan validasi form 
                    $button = (empty($edit)) ? "Simpan" : "Update";
                    ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                    <input type="hidden" name="idedit" value="<?= $edit ?>">
                  </div>
                </div>
              </form>
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
<!-- footer section -->
<?php require_once "footer.php" ?>