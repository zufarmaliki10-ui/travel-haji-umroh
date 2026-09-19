<?php 
include "../../database/connection.php";
function tambahPaket($tambah)
{
    global $conn;
    $nama_paket = htmlspecialchars($tambah['nama_paket']);
    $jenis = htmlspecialchars($tambah['jenis']);
    $kuota = htmlspecialchars($tambah['kuota']);
    $harga = htmlspecialchars($tambah['harga']);
    $durasi = htmlspecialchars($tambah['durasi']);
    $deskripsi = htmlspecialchars($tambah['deskripsi']);

    $query = "INSERT INTO paket (nama_paket,jenis,kuota,harga,durasi,deskripsi) VALUES ('$nama_paket', '$jenis', '$kuota', '$harga', '$durasi', '$deskripsi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}