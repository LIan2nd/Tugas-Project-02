<?php
require_once '../../../dbconn.php';
include_once '../templates/header.php';
include_once '../templates/sidebar.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM jenis_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$datas = $st->fetch();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Jenis Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Jenis Produk</a></li>
                        <li class="breadcrumb-item active">Detail Jenis Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Produk Jenis
                    <?= $datas['nama'] ?>
                </h3>

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
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i>
                            <?= $datas['nama'] ?>
                        </h3>
                        <p class="text-muted">
                            Produk jenis ini adalah produk-produk yang cocok dan pas untuk ditempatkan di
                            <?= $datas['nama'] ?>
                        </p>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">Produk-produk di jenis
                                                ini</span>
                                            <?php
                                            $nama_jenis = $datas['nama'];
                                            $sql_produk = "SELECT * FROM produk WHERE jenis_produk = '$nama_jenis'";
                                            $produk = $dbh->query($sql_produk);
                                            ?>
                                            <?php foreach ($produk as $product): ?>
                                            <span
                                                class="info-box-number text-center text-muted mb-0"><?= $product['nama'] ?></span>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">id Produk</span>
                                            <span
                                                class="info-box-number text-center text-muted mb-0"><?= $datas['id'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">Jenis Produk</span>
                                            <span
                                                class="info-box-number text-center text-muted mb-0"><?= $datas['nama'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted">
                            <p class="text-sm">Company
                                <b class="d-block">Peruta Inc.</b>
                            </p>
                            <p class="text-sm">CEO
                                <b class="d-block">Alfian Nur Usyaid</b>
                            </p>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <a href="index.php" class="btn btn-sm btn-success">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
include_once '../templates/footer.php';
?>