<?php
require_once '../../../dbconn.php';

$_id = $_POST['id'];
$_nama = $_POST['nama'];


$_proses = $_POST['proses'];

$ar_data[] = $_id;
$ar_data[] = $_nama;


if ($_proses == "Simpan") {
    $sql = "INSERT INTO jenis_produk (id,nama) values (?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE jenis_produk SET id=?,nama=? WHERE id=?";
}

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php');
?>