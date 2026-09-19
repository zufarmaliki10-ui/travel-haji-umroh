<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}

require 'database/connection.php';

?>

<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="sidebar-brand-icon">
            <i class="fas fa-kaaba"></i>
        </div>
        <h4>KEMENHAJ PANEL</h4>
        <p>Sistem Informasi Haji & Umroh</p>
    </div>

    <ul class="sidebar-nav">
        <li class="sidebar-menu-title">MENU UTAMA</li>
        <li>
            <a href="index.php?page=dashboard" class="">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="sidebar-menu-title">MANAJEMEN DATA</li>
        <li>
            <a href="index.php?page=jamaah" class="">
                <i class="fas fa-users"></i> Data Jamaah
            </a>
        </li>
        <li>
            <a href="tabel_paket.php" class="">
                <i class="fas fa-box"></i> Paket Haji/Umroh
            </a>
        </li>
        <li>
            <a href="tabel_user.php" class="">
                <i class="fas fa-user-shield"></i> Kelola Petugas
            </a>
        </li>
        <li>
            <a href="profile_petugas.php" class="">
                <i class="fas fa-cog"></i> Settings
            </a>
        </li>
        <li class="sidebar-menu-title">TRANSAKSI & LAPORAN</li>
        <li>
            <a href="tabel_pembayaran.php" class="">
                <i class="fas fa-wallet"></i> Pembayaran
            </a>
        </li>
        <li>
            <a href="tabel_keberangkatan.php" class="">
                <i class="fas fa-calendar-alt"></i> Jadwal Keberangkatan
            </a>
        </li>
        <li>
            <a href="tabel_laporan.php" class="">
                <i class="fas fa-print"></i> Generate Laporan
            </a>
        </li>
        <li class="sidebar-menu-title">SISTEM</li>
        <li>
            <a href="../login/function/LogoutController.php" onclick="return confirm('Yakin ingin logout?');" class="text-danger">
                <i class="fas fa-sign-out-alt text-danger"></i> Logout
            </a>
        </li>
    </ul>
</aside>