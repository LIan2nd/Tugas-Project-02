<?php
session_start();

if ($_POST['email'] == '' || $_POST['password'] == '') {
    header('Location: login.html?error=1');
    exit();
}

// AKUN ADMIN
if ($_POST['email'] == 'admin@login.com' && $_POST['password'] == 'admin123') {
    $_SESSION['loggedin'] = true;

    header('Location: admin/index.php');
    exit();
} else {
    header('Location: login.php?error=2');
    exit();
}
?>