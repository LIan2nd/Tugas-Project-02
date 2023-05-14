<?php
require_once '../../../dbconn.php';

include_once '../templates/header.php';
include_once '../templates/sidebar.php';


$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    // edit
    $sql = "SELECT * FROM jenis_produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $datas = $st->fetch();
} else {
    // new data
    $datas = [];
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Jenis Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Jenis Produk</a></li>
                        <li class="breadcrumb-item active">Edit Jenis Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Jenis Produk</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses.php">
                            <div class="form-group">
                                <label for="id">id</label>
                                <input type="text" id="id" name="id" value="<?= $datas['id']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Jenis Produk</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="<?= $datas['nama']; ?>"></input>
                            </div>
                            <div class="col-12">
                                <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                                <a href="index.php" class="btn btn-secondary">Cancel</a>
                                <input type="submit" name="proses" value="<?= $button ?>"
                                    class="btn btn-success float-right">
                                <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once '../templates/footer.php';
?>