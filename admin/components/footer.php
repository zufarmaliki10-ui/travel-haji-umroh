<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}
?>
<footer class="main-footer">
    <div>Copyright &copy; Kemenhaj Panel 2026</div>
</footer>