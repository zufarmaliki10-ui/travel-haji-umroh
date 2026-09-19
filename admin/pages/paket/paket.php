<?php
require_once 'function/paket/dataPaket.php';
?>
<div class="content-body p-4">
    <!-- Header Halaman Modern -->
    <div
        class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div class="d-flex align-items-center">
            <div class="icon-box-p p-3 text-white me-3 shadow-sm"
                style="background: linear-gradient(135deg, #064e3b 0%, #047857 100%);">
                <i class="fas fa-kaaba fs-6"></i>
            </div>
            <div>
                <h3 class="fw-extrabold text-dark mb-0">Paket Travel</h3>
                <p class="mb-0 text-muted small">Kelola katalog dan harga paket perjalanan Haji & Umroh</p>
            </div>
        </div>

        <a href="index.php?page=tambah-paket" class="btn btn-gold px-4 py-2.5 shadow-sm d-flex align-items-center gap-2">
            <i class="fas fa-plus"></i> Add Paket Baru
        </a>
    </div>

    <!-- Ringkasan Stats Modern -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card stat-card-paket total shadow-sm p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Total Paket Available</span>
                        <h3 class="fw-bold text-dark mb-0"><?= $totalPaket['totalPaket'] ?></h3>
                    </div>
                    <div class="icon-box-p text-emerald py-2 px-3"
                        style="background-color: rgba(6, 78, 59, 0.1); color: var(--primary-emerald);">
                        <i class="fas fa-box"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card-paket haji shadow-sm p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Paket Haji</span>
                        <h3 class="fw-bold text-dark mb-0"><?= $totalHaji['totalHaji'] ?></h3>
                    </div>
                    <div class="icon-box-p bg-warning bg-opacity-10 text-warning py-2 px-3">
                        <i class="fas fa-kaaba"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card-paket umroh shadow-sm p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-semibold d-block mb-1">Paket Umroh</span>
                        <h3 class="fw-bold text-dark mb-0"><?= $totalUmroh['totalUmroh'] ?></h3>
                    </div>
                    <div class="icon-box-p bg-info bg-opacity-10 text-info py-2 px-3">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Card Container Modern -->
    <div class="card custom-table-card border-0 shadow-sm bg-white w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold text-dark mb-1">Daftar Paket Travel</h5>
                    <p class="mb-0 small text-muted">Katalog paket aktif yang siap didaftarkan oleh jamaah</p>
                </div>
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">
                    Total Paket
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-modern align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-3" style="width: 60px;">NO</th>
                            <th>INFORMASI PAKET</th>
                            <th>JENIS</th>
                            <th>HARGA / PAX</th>
                            <th>DURASI</th>
                            <th>KUOTA</th>
                            <th class="text-center" style="width: 140px;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                            <tr class="border-bottom">
                                <td class="ps-3">
                                    <span class="fw-bold text-secondary small">
                                        <?= $i ?>
                                    </span>
                                </td>

                                <!-- Nama & Deskripsi Paket -->
                                <td class="py-3">
                                    <div class="fw-bold text-dark fs-6 mb-1">
                                        <?= $data['nama_paket'] ?>
                                    </div>
                                    <div class="text-muted small text-truncate" style="max-width: 380px;">
                                        <i class="fas fa-align-left me-1 opacity-50"></i><?= $data['deskripsi'] ?>
                                    </div>
                                </td>

                                <!-- Jenis -->
                                <td>
                                    <?= $data['jenis'] ?>
                                </td>

                                <!-- Harga -->
                                <td>
                                    <span class="fw-bold"
                                        style="color: var(--accent-gold) !important; font-size: 15px;">
                                        Rp <?= $data['harga'] ?>
                                    </span>
                                </td>

                                <!-- Durasi Paket -->
                                <td>
                                    <div class="fw-semibold text-secondary small">
                                        <i class="far fa-clock me-1 text-muted"></i>
                                        <?= $data['durasi'] ?>
                                    </div>
                                </td>

                                <!-- Kuota -->
                                <td>
                                    <span class="badge bg-light text-dark border px-2.5 py-1.5 rounded-2 fw-medium">
                                        <i
                                            class="fas fa-users me-1 text-muted"></i>
                                        <?= $data['kuota'] ?> Jamaah
                                    </span>
                                </td>

                                <!-- Action -->
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Tombol Mata (Detail Modal) -->
                                        <!-- <button type="button" class="action-btn action-btn-view" data-bs-toggle="modal"
                                        data-bs-target="" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button> -->

                                        <!-- Tombol Edit -->
                                        <a href="index.php?page=update-paket&id=<?= $data['id'] ?>"
                                            class="btn action-btn action-btn-edit" title="Edit Paket">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <a href=""
                                            class="btn action-btn action-btn-delete"
                                            onclick="return confirm('Yakin ingin menghapus paket ini?');"
                                            title="Hapus Paket">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endwhile ?>

                        <!-- Modal Detail Paket (Tombol X di-remove) -->
                        <div class="modal fade" id="modalDetail" tabindex="-1"
                            aria-labelledby="modalDetailLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 shadow-lg rounded-4">
                                    <div class="modal-header border-bottom-0 pb-0">
                                        <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2"
                                            id="modalDetailLabel">
                                            <i class="fas fa-info-circle text-warning"></i> Detail Paket Travel
                                        </h5>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="text-muted small fw-semibold d-block mb-1">Nama
                                                    Paket</label>
                                                <div class="fw-bold text-dark fs-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted small fw-semibold d-block mb-1">Jenis
                                                    Paket</label>
                                                <div>
                                                    <span class="badge rounded-pill px-3 py-2"
                                                        style="background-color: #fef3c7; color: #d97706; font-size: 11px; font-weight: 600;">
                                                        <i class="fas fa-kaaba me-1"></i> Haji
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted small fw-semibold d-block mb-1">Harga /
                                                    Pax</label>
                                                <div class="fw-bold text-success fs-5">Rp
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label
                                                    class="text-muted small fw-semibold d-block mb-1">Durasi</label>
                                                <div class="fw-bold text-dark"><i
                                                        class="far fa-clock me-1 text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="text-muted small fw-semibold d-block mb-1">Kuota
                                                    Tersedia</label>
                                                <div class="fw-bold text-dark"><i
                                                        class="fas fa-users me-1 text-muted"></i>
                                                    Jamaah</div>
                                            </div>
                                            <div class="col-12">
                                                <hr class="my-2">
                                                <label class="text-muted small fw-semibold d-block mb-1">Deskripsi &
                                                    Fasilitas Paket</label>
                                                <div class="bg-light p-3 rounded-3 text-dark small"
                                                    style="white-space: pre-line; line-height: 1.6;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-top-0 pt-0">
                                        <button type="button" class="btn btn-secondary px-4 rounded-3"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>