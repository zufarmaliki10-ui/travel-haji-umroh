<?php
include "../../database/connection.php";
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM paket WHERE id = $id");
$data = mysqli_fetch_assoc($result);

function ubahPaket($paket)
{
    global $conn;
    $id = $paket['id'];
    $nama_paket = htmlspecialchars($paket['nama_paket']);
    $jenis = htmlspecialchars($paket['jenis']);
    $kuota = htmlspecialchars($paket['kuota']);
    $harga = htmlspecialchars($paket['harga']);
    $durasi = htmlspecialchars($paket['durasi']);
    $deskripsi = htmlspecialchars($paket['deskripsi']);

    $query = "UPDATE paket SET 
                id = '$id',
                nama_paket = '$nama_paket',
                jenis = '$jenis',
                kuota = '$kuota',
                harga = '$harga',
                durasi = '$durasi',
                deskripsi = '$deskripsi'
                
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
