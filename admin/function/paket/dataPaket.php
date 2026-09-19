<?php
include "../../database/connection.php";
//ambil data paket
$result = mysqli_query($conn, "SELECT * FROM paket");

//ambil total jumlah paket
$dataPaket = mysqli_query($conn, "SELECT COUNT(*) AS totalPaket FROM paket");
$totalPaket = mysqli_fetch_assoc($dataPaket);

//ambil paket haji
$dataHaji = mysqli_query($conn, "SELECT COUNT(*) AS totalHaji FROM paket WHERE jenis = 'Haji'");
$totalHaji = mysqli_fetch_assoc($dataHaji);

//ambil paket umroh
$dataUmroh = mysqli_query($conn, "SELECT COUNT(*) AS totalUmroh FROM paket WHERE jenis = 'Umroh'");
$totalUmroh = mysqli_fetch_assoc($dataUmroh);
