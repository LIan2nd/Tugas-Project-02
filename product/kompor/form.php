<?php
include_once '../templates/header.php';
require_once '../../dbconn.php';
?>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <h3>Form Pemesanan</h3>
                <form method="POST" action="invoice.php">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="nama_pemesan">Nama</label>
                            <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="qty">Jumlah Pesanan</label>
                            <input type="number" name="qty" id="qty" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="alamat_pemesan">Alamat</label>
                            <textarea name="alamat_pemesan" id="alamat_pemesan" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="proses" value="Beli" class="btn btn-primary">
                        <a href="index.php" class="btn btn-primary">Gajadi</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

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