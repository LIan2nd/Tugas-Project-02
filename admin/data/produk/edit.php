<?php
require_once '../../../dbconn.php';

include_once '../templates/header.php';
include_once '../templates/sidebar.php';


$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    // edit
    $sql = "SELECT * FROM produk WHERE id=?";
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
                    <h1>Form produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">produk</a></li>
                        <li class="breadcrumb-item active">Edit produk</li>
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
                        <h3 class="card-title">produk</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses.php">
                            <div class="form-group">
                                <label for="kode">kode</label>
                                <input type="text" id="kode" name="kode" value="<?= $datas['kode']; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="<?= $datas['nama']; ?>"></input>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" id="harga" name="harga" class="form-control"
                                    value="<?= $datas['harga']; ?>">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" id="stok" name="stok" class="form-control"
                                    value="<?= $datas['stok']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis_produk">Jenis Produk</label>
                                <?php
                                $sqlJenis = "SELECT * FROM jenis_produk";
                                $jenis_produk = $dbh->query($sqlJenis);
                                ?>
                                <select id="jenis_produk" name="jenis_produk" class="custom-select"
                                    value="<?= $datas['jenis_produk']; ?>">
                                    <?php foreach ($jenis_produk as $jenis): ?>
                                        <option value="<?= $jenis['nama'] ?>"><?= $jenis['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
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