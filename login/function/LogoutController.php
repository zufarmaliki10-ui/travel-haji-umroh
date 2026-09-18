<?php
session_start();

//hapus variabel session
$_SESSION = array();

//unset semua data session
session_unset();

//hancurkan session
session_destroy();

//kembali 
header("location: index.php");
exit();
