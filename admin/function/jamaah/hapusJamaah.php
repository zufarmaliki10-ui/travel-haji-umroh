<?php
include "../../database/connection.php";

$id = $_GET['id'];

$data = $conn->query("DELETE FROM jamaah WHERE id='$id'");

if ($data) {
    header("Location: ../../index.php?page=jamaah");
    exit();
} else {
    header("Location: ../../index.php?page=jamaah");
    exit();
}
