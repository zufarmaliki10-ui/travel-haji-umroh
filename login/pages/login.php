<div class="card-login text-center">
    <div class="mb-3 text-warning"><i class="fas fa-kaaba fa-3x" style="color: #064e3b;"></i></div>
    <h4 class="fw-bold text-success mb-1">KEMENHAJ PANEL</h4>
    <p class="text-muted small mb-4">Masuk untuk mengelola data travel</p>

    <form action="login/function/LoginController.php" method="POST">
        <div class="mb-3 text-start">
            <label for="username" class="form-label small fw-bold">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-4 text-start">
            <label class="form-label small fw-bold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <button type="submit" class="btn btn-gold w-100 py-2 rounded-3 mb-3">LOGIN</button>
    </form>

    <div class="text-center mt-3 pt-3 border-top">
        <p class="small text-muted mb-0">Belum punya akun jamaah? <a href="register.php" class="text-success fw-bold text-decoration-none">Daftar Akun</a></p>
    </div>
</div>