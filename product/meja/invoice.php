<?php
require_once '../../dbconn.php';

$_nama_produk = "Meja";
$_qty = $_POST['qty'];
$_tanggal = date('Y-m-d');
$_harga = 999000;
$_total_harga = $_qty * 999000;
$_nama = $_POST['nama_pemesan'];
$_alamat = $_POST['alamat_pemesan'];


$_proses = $_POST['proses'];

$ar_data[] = $_nama_produk;
$ar_data[] = $_qty;
$ar_data[] = $_tanggal;
$ar_data[] = $_total_harga;
$ar_data[] = $_nama;
$ar_data[] = $_alamat;


$sql = "insert into pesanan (nama_produk,qty,tanggal,total_harga,nama_pemesan,alamat_pemesan) values (?,?,?,?,?,?)";
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}
include_once '../templates/header.php';
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
    style="background-image:url(../../images/coffeeTable.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Terimakasih Banyak,
                            <?= $_nama ?>
                        </h1>
                        <h2>Telah membeli produk di tempat <a href="../../about.php">Kami</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Invoice</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="../../admin/dist/img/credit/visa.png" alt="Visa">
                        <img src="../../admin/dist/img/credit/mastercard.png" alt="Mastercard">
                        <img src="../../admin/dist/img/credit/american-express.png" alt="American Express">
                        <img src="../../admin/dist/img/credit/paypal2.png" alt="Paypal">

                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                            Tetaplah belanja di tempat Kami, selamat beraktivitas. Have a Great Day
                        </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <p class="lead">Dibeli pada
                            <?= $_tanggal ?>
                        </p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Nama Produk:</th>
                                    <td>
                                        <?= $_nama_produk ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:50%">qty:</th>
                                    <td>
                                        <?= $_qty ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:50%">Harga:</th>
                                    <td>Rp.
                                        <?= $_harga ?> .-
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:50%">Total Harga:</th>
                                    <td>
                                        Rp.
                                        <?= $_total_harga ?>.-
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:50%">Alamat:</th>
                                    <td>
                                        <?= $_alamat ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-12">
                        <a type="button" href="../../product.php" class="btn btn-success float-right"><i
                                class="far fa-credit-card"></i>
                            Lanjut Belanja
                        </a>
                        <a type="button" href="../../index.php" class="btn btn-primary float-right"
                            style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Selesai
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-started">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Newsletter</h2>
                <p>Just stay tune for our latest Product. Now you can subscribe</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../templates/footer.php';
?>