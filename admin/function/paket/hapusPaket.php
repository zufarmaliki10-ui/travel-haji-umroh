<?php
include "../../database/connection.php";

$id = $_GET['id'];

$data = $conn->query("DELETE FROM paket WHERE id='$id'");

if ($data) {
    header("Location: ../../index.php?page=paket");
    exit();
} else {
    header("Location: ../../index.php?page=paket");
    exit();
}
