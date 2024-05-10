<?php

require 'dbkoneksi.php';
include_once 'header.php';
include_once 'sidebar.php';

// Perintah untuk mengambil data dari table pasien
$sql = 'SELECT * FROM unit_kerja';
// Menjalankan query
$getUnitKerja = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Unit Kerja</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Unit Kerja</h3>

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
        <table class="table tablebordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Unit</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($getUnitKerja as $key => $uk) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $uk['nama'] ?></td>
                <td>
                  <a href="./form_unit_kerja.php?id=<?= $uk['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                  <form action="proses_unit_kerja.php" method="post">
                    <input type="hidden" name="id_pasien" value="<?= $uk['id'] ?>">
                    <input type="submit" name="proses" class="btn btn-sm btn-danger" value="Hapus">
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
    include_once 'footer.php';
    ?>