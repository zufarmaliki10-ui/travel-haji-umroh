<?php
include "../../database/connection.php";
//ambil data jamaah
$result = mysqli_query($conn, "SELECT * FROM jamaah ORDER BY nama_lengkap");

//ambil total jumlah jamaah
$dataJamaah = mysqli_query($conn, "SELECT COUNT(*) AS totalJamaah FROM jamaah");
$totalJamaah = mysqli_fetch_assoc($dataJamaah);

//ambil jamaah laki-laki
$dataLaki = mysqli_query($conn, "SELECT COUNT(*) AS totalLaki FROM jamaah WHERE jenis_kelamin = 'L'");
$totalLaki = mysqli_fetch_assoc($dataLaki);

//ambil jamaah perempuan
$dataPerempuan = mysqli_query($conn, "SELECT COUNT(*) AS totalPerempuan FROM jamaah WHERE jenis_kelamin = 'P'");
$totalPerempuan = mysqli_fetch_assoc($dataPerempuan);