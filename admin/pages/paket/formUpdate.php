<div class="content-body p-4">
    <!-- Header Judul -->
    <div class="d-flex align-items-center mb-4">
        <div class="icon-header-box text-white me-3 shadow-sm">
            <i class="fas fa-plus"></i>
        </div>
        <div>
            <h3 class="fw-extrabold text-dark mb-0">Update Paket Travel</h3>
            <p class="mb-0 text-muted small">Update data paket yang tersedia di travel anda</p>
        </div>
    </div>

    <!-- Form Card Container -->
    <div class="card form-card border-0 shadow-sm bg-white">
        <div class="card-body p-4">
            <div class="d-flex align-items-center fw-bold mb-3" style="color: var(--primary-emerald); font-size: 1.05rem;">
                <i class="fas fa-kaaba me-2"></i> Informasi Paket Travel
            </div>
            <hr class="mt-0 mb-4" style="border-color: #e2e8f0;">
            <?php

            include "function/paket/updatePaket.php";

            if (isset($_POST["submit"])) {
                if (ubahPaket($_POST) > 0) {
                    echo "
                    <script>
                        document.location.href = 'index.php?page=paket';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        document.location.href = 'index.php?page=paket';
                    </script>
                    ";
                };
            }
            ?>
            <form action="" method="post">
                <div class="row g-3">
                    <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>">
                    <!-- Nama Paket -->
                    <div class="col-md-8 mb-2">
                        <label for="nama_paket" class="form-label fw-semibold">Nama Paket <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                            placeholder="Contoh: Paket Umroh VIP Ramadhan" value="<?= $data['nama_paket'] ?>" required>
                    </div>

                    <!-- Jenis Paket -->
                    <div class="col-md-4 mb-2">
                        <label for="jenis" class="form-label fw-semibold">Jenis Paket <span class="text-danger">*</span></label>
                        <select class="form-select" id="jenis" name="jenis" required>
                            <option value="" selected disabled>-- Pilih Jenis --</option>
                            <option value="Haji" <?= $data['jenis'] === 'Haji' ? 'selected' : '' ?>>Haji</option>
                            <option value="Umroh" <?= $data['jenis'] === 'Umroh' ? 'selected' : '' ?>>Umroh</option>
                        </select>
                    </div>

                    <!-- Harga Paket -->
                    <div class="col-md-6 mb-2">
                        <label for="harga" class="form-label fw-semibold">Harga Paket (Per PAX) <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text input-group-text-emerald">Rp</span>

                            <!-- Input Tampilan (Rupiah Formatted) -->
                            <input type="number" class="form-control" id="harga" name="harga"
                                placeholder="Contoh: 35.000.000" value="<?= $data['harga'] ?>" required>
                        </div>
                    </div>

                    <!-- Durasi Paket -->
                    <div class="col-md-3 mb-2">
                        <label for="durasi" class="form-label fw-semibold">Durasi Perjalanan <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="durasi" name="durasi" min="1"
                                placeholder="Contoh: 9" value="<?= $data['durasi'] ?>" required>
                            <span class="input-group-text bg-light text-muted fw-semibold" style="border-top-right-radius: 12px; border-bottom-right-radius: 12px;">Hari</span>
                        </div>
                    </div>

                    <!-- Kuota Jamaah -->
                    <div class="col-md-3 mb-2">
                        <label for="kuota" class="form-label fw-semibold">Kuota Jamaah <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="kuota" name="kuota" min="1"
                                value="<?= $data['kuota'] ?>" placeholder="Contoh: 45" required>
                            <span class="input-group-text bg-light text-muted fw-semibold" style="border-top-right-radius: 12px; border-bottom-right-radius: 12px;">Jamaah</span>
                        </div>
                    </div>

                    <!-- Deskripsi / Fasilitas -->
                    <div class="col-12 mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi & Fasilitas Paket</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"
                            placeholder="Jelaskan fasilitas tercover, seperti hotel, pesawat, bus, dan konsumsi..."><?= $data['deskripsi'] ?></textarea>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end gap-2 pt-3 border-top">
                    <a href="index.php?page=paket" class="btn btn-cancel px-4 py-2 d-flex align-items-center gap-2">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" name="submit" class="btn btn-gold px-4 py-2 d-flex align-items-center gap-2 shadow-sm">
                        <i class="fas fa-save"></i> Simpan Paket
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>