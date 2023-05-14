<?php
session_start();

// cek apakah email dan password sudah diisi
if ($_POST['email'] == '' || $_POST['password'] == '') {
    header('Location: login.html?error=1');
    exit();
}

// cek apakah email dan password benar
if ($_POST['email'] == 'admin@login.com' && $_POST['password'] == 'admin123') {
    // simpan data login ke dalam session
    $_SESSION['loggedin'] = true;

    // arahkan ke halaman dashboard admin
    header('Location: admin/index.php');
    exit();
} else {
    // jika email atau password salah, kembali ke halaman login dan tampilkan pesan error
    echo "<script>alert('Email dan Password salah, Anda bukan Admin);</script>";
    header('Location: login.php?error=2');
    exit();
}
?>