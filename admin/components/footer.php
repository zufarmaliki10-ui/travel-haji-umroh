<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}
?>
<footer class="main-footer py-4 d-flex align-items-center justify-content-center bg-secondary-subtle">
    <div>Copyright &copy; Kemenhaj Panel 2026</div>
</footer>