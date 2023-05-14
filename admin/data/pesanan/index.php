<?php
require_once '../../../dbconn.php';

// Apabila table memiliki relasi:D
// $sql = "SELECT DISTINCT pesanan.*, pesanan.nama_produk as is_pesanan
// FROM pesanan LEFT JOIN pesanan ON pesanan.id = pesanan.id";
$sql = "SELECT * FROM pesanan";
$datas = $dbh->query($sql);

include_once '../templates/header.php';
include_once '../templates/sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Pesanan</li>
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
                <!-- Saya Disable tombol ini karena pesanan hanya akan ditambahkan oleh user -->
                <a href="form.php" class="btn btn-success">Create Pesanan</a>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>qty</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat Pemesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($datas as $data) {
                            ?>
                            <tr class="text-center">
                                <td>
                                    <?= $nomor ?>
                                </td>
                                <td>
                                    <?= $data['nama_produk'] ?>
                                </td>
                                <td>
                                    <?= $data['qty'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggal'] ?>
                                </td>
                                <td>
                                    Rp.
                                    <?= number_format($data['total_harga'], 0, ',', '.') ?>,-
                                </td>
                                <td>
                                    <?= $data['nama_pemesan'] ?>
                                </td>
                                <td>
                                    <?= $data['alamat_pemesan'] ?>
                                </td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-primary btn-sm" href="view.php?id=<?= $data['id'] ?>"> <i
                                            class="fas fa-folder"></i> View</a>
                                    <a class="btn btn-info btn-sm" href="edit.php?idedit=<?= $data['id'] ?>"> <i
                                            class="fas fa-pencil-alt"></i> Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete.php?iddel=<?= $data['id'] ?>"
                                        onclick="if(!confirm('Anda Yakin Hapus Data Pesanan milik <?= $data['nama_pemesan'] ?>?')) {return false}">
                                        <i class="fas fa-trash"></i> Delete</a>
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

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../templates/footer.php';
?>