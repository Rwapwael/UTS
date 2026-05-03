<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- ── Welcome Banner ───────────────────────── -->
<div class="card border-0 shadow-sm mb-4 bg-primary text-white">
    <div class="card-body p-4">
        <div class="d-flex align-items-center flex-wrap gap-3">
            <div class="bg-white bg-opacity-25 rounded-circle p-3 flex-shrink-0">
                <i class="bi bi-person-fill fs-3"></i>
            </div>
            <div class="flex-grow-1">
                <h4 class="fw-bold mb-0">
                    Selamat Datang, <?= esc(session()->get('username')) ?>! &#128075;
                </h4>
                <p class="mb-0 opacity-75 small">
                    Role: <strong><?= esc(session()->get('role')) ?></strong>
                    &nbsp;|&nbsp; Dashboard Admin Lembaga Kursus Inspirasi
                </p>
            </div>
            <a href="<?= site_url('/logout') ?>" class="btn btn-outline-light fw-semibold">
                <i class="bi bi-box-arrow-right me-1"></i>Logout
            </a>
        </div>
    </div>
</div>

<!-- ── Flash Messages ───────────────────────── -->
<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show">
    <i class="bi bi-check-circle-fill me-2"></i><?= session()->getFlashdata('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<!-- ── Statistik ─────────────────────────────── -->
<div class="row g-3 mb-4">
    <?php
    $cards = [
        ['icon' => 'bi-people',          'label' => 'Total Alumni',      'value' => '2.500+', 'color' => 'primary'],
        ['icon' => 'bi-journal-text',    'label' => 'Program Aktif',     'value' => '6',      'color' => 'success'],
        ['icon' => 'bi-calendar-check',  'label' => 'Peserta Bulan Ini', 'value' => '87',     'color' => 'warning'],
        ['icon' => 'bi-star-fill',       'label' => 'Rating Lembaga',    'value' => '4.9/5',  'color' => 'danger'],
    ];
    foreach ($cards as $c): ?>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm text-center p-3">
            <i class="bi <?= $c['icon'] ?> text-<?= $c['color'] ?> fs-2 mb-1"></i>
            <h5 class="fw-bold text-<?= $c['color'] ?> mb-0"><?= $c['value'] ?></h5>
            <small class="text-muted"><?= $c['label'] ?></small>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- ── Form Edit Kontak ──────────────────────── -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-warning text-dark fw-bold">
        <i class="bi bi-pencil-square me-2"></i>Edit Informasi Kontak Website
    </div>
    <div class="card-body">
        <p class="text-muted small mb-3">
            Perubahan di sini akan langsung tercermin pada halaman
            <a href="<?= site_url('/kontak') ?>">Kontak</a>.
        </p>

        <form action="<?= site_url('/admin/updateKontak') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Alamat</label>
                    <input type="text" name="alamat" class="form-control"
                           value="<?= esc($kontak['alamat']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= esc($kontak['email']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Nomor Telepon</label>
                    <input type="text" name="telepon" class="form-control"
                           value="<?= esc($kontak['telepon']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Jam Operasional</label>
                    <input type="text" name="jam" class="form-control"
                           value="<?= esc($kontak['jam']) ?>" required>
                </div>

                <div class="col-12 d-flex gap-2">
                    <button type="submit" class="btn btn-primary fw-semibold">
                        <i class="bi bi-save me-2"></i>Simpan Perubahan
                    </button>
                    <a href="<?= site_url('/kontak') ?>" class="btn btn-outline-secondary">
                        <i class="bi bi-eye me-1"></i>Lihat Halaman Kontak
                    </a>
                    <a href="<?= site_url('/home') ?>" class="btn btn-outline-secondary">
                        <i class="bi bi-house me-1"></i>Lihat Beranda
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
