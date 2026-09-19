<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}

require "database/connection.php";
?>
<div class="main-wrapper">
    <div class="content-body p-4">

        <!-- Hero Banner Islami Premium -->
        <div class="dashboard-hero-premium p-4 p-md-5 mb-4 text-white">
            <div class="hero-glow"></div>
            <i class="fas fa-kaaba hero-pattern"></i>
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-8">
                    <span class="badge gold-badge px-3 py-2 rounded-pill mb-3">
                        <i class="fas fa-crown text-warning me-1"></i> Dashboard
                    </span>
                    <h2 class="fw-extrabold mb-2 display-6">Selamat Datang, ! 👋</h2>
                    <p class="mb-0 text-light opacity-90 fs-6 style-italic fw-normal">
                        "Labbaikallahumma Labbaik" — Selamat datang di Layanan Informasi Haji & Umroh Kemenhaj Panel.
                    </p>
                </div>
            </div>
        </div>

        <!-- Header Ringkasan -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h4 class="fw-bold text-dark mb-1">Ringkasan Layanan</h4>
                <p class="text-muted small mb-0">Statistik dan data operasional terbaru</p>
            </div>
            <span class="badge bg-white text-emerald border shadow-sm px-3 py-2 rounded-pill d-flex align-items-center gap-2">
                <span class="spinner-grow spinner-grow-sm text-success" role="status"></span>
                <span class="fw-semibold text-dark">Sistem Live</span>
            </span>
        </div>

        <!-- Grid Cards Statistik Modern -->
        <div class="row g-4 mb-4">
            <!-- Tampilan Card Khusus Jamaah (3 Card) -->
            <div class="col-12 col-md-4">
                <div class="card stat-card-modern haji-card shadow-sm p-3 h-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted fw-semibold small d-block mb-1">Jadwal Keberangkatan</span>
                            <h2 class="fw-bold text-dark mb-0 fs-3"></h2>
                        </div>
                        <div class="icon-box-modern bg-warning bg-opacity-10 text-warning">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-top d-flex align-items-center justify-content-between text-muted small">
                        <span><i class="fas fa-plane text-warning me-1"></i> Program</span>
                        <span class="fw-semibold text-dark text-truncate" style="max-width: 140px;"></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card stat-card-modern pendaftaran-card shadow-sm p-3 h-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted fw-semibold small d-block mb-1">Pendaftaran Saya</span>
                            <h2 class="fw-bold text-dark mb-0 display-6"></h2>
                        </div>
                        <div class="icon-box-modern bg-primary bg-opacity-10 text-primary">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-top d-flex align-items-center justify-content-between text-muted small">
                        <span><i class="fas fa-info-circle text-primary me-1"></i> Riwayat</span>
                        <span class="fw-semibold text-dark">Pendaftaran</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card stat-card-modern jamaah-card shadow-sm p-3 h-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted fw-semibold small d-block mb-1">Riwayat Pembayaran</span>
                            <h2 class="fw-bold text-dark mb-0 display-6"></h2>
                        </div>
                        <div class="icon-box-modern bg-success bg-opacity-10 text-success">
                            <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-top d-flex align-items-center justify-content-between text-muted small">
                        <span><i class="fas fa-check-circle text-success me-1"></i> Lunas/DP</span>
                        <span class="fw-semibold text-dark">Transaksi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Akses Cepat Modern -->
        <div class="mb-3">
            <h5 class="fw-bold text-dark mb-1">Akses Pintas</h5>
            <p class="text-muted small mb-0">Menu interaktif untuk mempermudah navigasi</p>
        </div>

        <div class="row g-3">
            <!-- Quick Actions Admin / Petugas -->
            <div class="col-md-4">
                <a href="form_tambah_paket.php" class="quick-card-interactive p-3 shadow-sm">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-modern text-white" style="background-color: var(--primary-emerald);">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Buat Paket Baru</h6>
                                <span class="text-muted small">Kelola program Haji & Umroh</span>
                            </div>
                        </div>
                        <div class="action-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="tabel_jamaah.php" class="quick-card-interactive p-3 shadow-sm">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-modern text-dark" style="background-color: var(--light-gold); color: var(--accent-gold) !important;">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Kelola Data Jamaah</h6>
                                <span class="text-muted small">Kelola porsi & dokumen</span>
                            </div>
                        </div>
                        <div class="action-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="tabel_laporan.php" class="quick-card-interactive p-3 shadow-sm">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-modern bg-info text-white">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Cetak Laporan</h6>
                                <span class="text-muted small">Rekapitulasi & transaksi</span>
                            </div>
                        </div>
                        <div class="action-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>