<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}
require_once 'function/jamaah/dataJamaah.php';
?>
<div class="main-wrapper">
    <div class="content-body p-4">
        <!-- Header Judul & Tombol Tambah -->
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div class="d-flex align-items-center">
                <div class="icon-header-box text-white me-3 shadow-sm">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <h3 class="fw-extrabold text-dark mb-0">Data Jamaah</h3>
                    <p class="mb-0 text-muted small">Kelola dan pantau profil jamaah Haji dan Umroh</p>
                </div>
            </div>

        </div>

        <!-- Stat Cards Summary -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card stat-card bg-white border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Total Jamaah</span>
                            <h3 class="fw-bold text-dark mb-0 mt-1"><?= $totalJamaah["totalJamaah"] ?> <span class="fs-6 fw-normal text-muted">Pax</span></h3>
                        </div>
                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center" style="background-color: #ecfdf5; color: var(--secondary-emerald); width: 48px; height: 48px;">
                            <i class="fas fa-user-friends fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card bg-white border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Jamaah Laki-Laki</span>
                            <h3 class="fw-bold text-dark mb-0 mt-1"><?= $totalLaki["totalLaki"] ?> <span class="fs-6 fw-normal text-muted">Pax</span></h3>
                        </div>
                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center" style="background-color: #e0f2fe; color: #0284c7; width: 48px; height: 48px;">
                            <i class="fas fa-mars fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card bg-white border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Jamaah Perempuan</span>
                            <h3 class="fw-bold text-dark mb-0 mt-1"><?= $totalPerempuan["totalPerempuan"] ?> <span class="fs-6 fw-normal text-muted">Pax</span></h3>
                        </div>
                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center" style="background-color: #fce7f3; color: #db2777; width: 48px; height: 48px;">
                            <i class="fas fa-venus fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table Card -->
        <div class="card table-card border-0 shadow-sm bg-white">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold text-dark mb-0">Daftar Jamaah Terdaftar</h5>
                        <p class="text-muted small mb-0">Seluruh data identitas jamaah terdaftar dalam sistem</p>
                    </div>
                    <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">Jamaah</span>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle border-0 mb-0">
                        <thead>
                            <tr>
                                <th class="border-0 pb-3" style="width: 50px;">NO</th>
                                <th class="border-0 pb-3">NIK</th>
                                <th class="border-0 pb-3">NAMA LENGKAP</th>
                                <th class="border-0 pb-3">JENIS KELAMIN</th>
                                <th class="border-0 pb-3">NO HP / WHATSAPP</th>
                                <th class="border-0 pb-3">ALAMAT</th>
                                <th class="border-0 pb-3 text-center" style="width: 110px;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                                <tr class="border-top">
                                    <td class="py-3 fw-bold text-secondary"><?= $i ?></td>
                                    <td class="py-3 font-monospace fw-semibold text-dark"><?= $data["nik"] ?></td>
                                    <td class="py-3">
                                        <div class="fw-bold text-dark"><?= $data["nama_lengkap"] ?></div>
                                    </td>
                                    <td class="py-3"><?= $data["jenis_kelamin"] ?></td>
                                    <td class="py-3 fw-semibold text-secondary">
                                        <i class="fab fa-whatsapp text-success me-1"></i><?= $data["no_hp"] ?>
                                    </td>
                                    <td class="py-3 text-muted small" style="max-width: 250px;"><?= $data["alamat"] ?></td>
                                    <td class="py-3 text-center">
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="function/jamaah/hapusJamaah.php?id=<?= $data['id']; ?>" class="btn btn-sm action-btn-delete px-2.5 py-1.5" onclick="return confirm('Yakin ingin menghapus data jamaah ini?')" title="Hapus Data">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>