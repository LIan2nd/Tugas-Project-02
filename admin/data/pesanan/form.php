<?php
require_once '../../../dbconn.php';

include_once '../templates/header.php';
include_once '../templates/sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pesanan</a></li>
                        <li class="breadcrumb-item active">Form Pesanan</li>
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
                        <h3 class="card-title">Pesanan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses.php">
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" id="nama_produk" name="nama_produk" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="qty">qty</label>
                                <input type="number" id="qty" name="qty" class="form-control" value=""></input>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="total_harga">Total Harga</label>
                                <input type="text" id="total_harga" name="total_harga" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="nama_pemesan">Nama Pemesan</label>
                                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="alamat_pemesan">Alamat Pemesan</label>
                                <input type="text" id="alamat_pemesan" name="alamat_pemesan" class="form-control"
                                    value="">
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