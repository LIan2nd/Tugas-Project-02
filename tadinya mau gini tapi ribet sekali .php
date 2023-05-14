<?php
require_once 'dbconn.php';
include_once 'templates/header.php';

$product = "SELECT * FROM produk";
$exProduct = $dbh->query($product);
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
    style="background-image:url(images/coffeeTable.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Product</h1>
                        <h2>Produk Lengkap milik Kami</h2>
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
                <span>Cool Stuff</span>
                <h2>Products.</h2>
                <p>Dan ini produk lebih lengkap yang Kami sediakan untuk keluarga kalian</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($exProduct as $product): ?>
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style="background-image:url(images/coffeeTable.jpg);">
                            <div class="inner">
                                <p>
                                    <a href="product/tempatTidur/index.php" class="icon"><i class="icon-eye"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="product/tempatTidur/index.php">
                                    <?= $product['nama'] ?>
                                </a></h3>
                            <span class="price">Rp.
                                <?= $product['harga'] ?>,-
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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
include_once 'templates/footer.php';
?>