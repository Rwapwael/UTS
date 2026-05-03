<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<div class="container px-3">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-6 col-lg-4">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <!-- Header kartu -->
                    <div class="text-center mb-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex
                                    align-items-center justify-content-center mb-3"
                             style="width:64px;height:64px">
                            <i class="bi bi-mortarboard-fill fs-3"></i>
                        </div>
                        <h4 class="fw-bold text-primary mb-0">LK Inspirasi</h4>
                        <p class="text-muted small">Portal Administrator</p>
                    </div>

                    <!-- Flash error -->
                    <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show small py-2" role="alert">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        <?= session()->getFlashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                    <!-- Form Login -->
                    <form action="<?= site_url('/login') ?>" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" name="username"
                                       class="form-control border-start-0"
                                       placeholder="Masukkan username"
                                       required autofocus>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-lock text-muted"></i>
                                </span>
                                <input type="password" name="password"
                                       class="form-control border-start-0"
                                       placeholder="Masukkan password"
                                       required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold py-2">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="<?= site_url('/home') ?>" class="text-muted small text-decoration-none">
                            <i class="bi bi-arrow-left me-1"></i>Kembali ke Beranda
                        </a>
                    </div>

                    <!-- Petunjuk demo -->
                    <div class="alert alert-info small mt-3 mb-0 py-2">
                        <i class="bi bi-info-circle me-1"></i>
                        <strong>Demo login:</strong>
                        <code>admin</code> / <code>password123</code>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
