<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: admin/index.php");
        exit();
    } elseif ($_SESSION['role'] === 'petugas') {
        header("Location: petugas/index.php");
        exit();
    } elseif ($_SESSION['role'] === 'jamaah') {
        header("Location: jamaah/index.php");
        exit();
    } else {
        echo "Anda telah melakukan login!";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <?php include 'login/partials/head.php' ?>
</head>

<body>
    <?php include 'login/pages/login.php' ?>
</body>

</html>