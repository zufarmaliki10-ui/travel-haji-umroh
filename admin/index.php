<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}

require 'database/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "partials/head.php" ?>
</head>

<body class="d-flex min-vh-100">
    <aside class="flex-shrink-0 min-vh-100 position-fixed">
        <?php include "components/sidebar.php" ?>
    </aside>
    <main class="d-flex flex-column flex-grow-1">
        <nav class="flex-shrink-0">
            <?php include "components/navbar.php" ?>
        </nav>
        <section class="flex-grow-1">
            <?php
            $page = $_GET['page'];
            switch ($page) {
                // dashboard page
                case 'dashboard':
                    include 'pages/dashboard.php';
                    break;
                // halaman data jamaah
                case 'jamaah':
                    include 'pages/jamaah/jamaah.php';
                    break;
                //halaman data paket
                case 'paket':
                    include 'pages/paket/paket.php';
                    break;
                case 'tambah-paket':
                    include 'pages/paket/formTambah.php';
                    break;
                case 'update-paket':
                    include 'pages/paket/formUpdate.php';
                    break;
                default:
                    include "pages/dashboard.php";
                    break;
            }
            ?>
        </section>
        <footer class="flex-shrink-0 text-center">
            <?php include "components/footer.php" ?>
        </footer>
    </main>
</body>

</html>