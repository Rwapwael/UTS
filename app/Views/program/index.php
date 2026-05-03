<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Judul Halaman -->
<div class="mb-4">
    <h2 class="fw-bold text-primary mb-1">
        <i class="bi bi-book-half me-2"></i>Program Kursus
    </h2>
    <p class="text-muted">Pilih program yang sesuai dengan minat dan tujuan kariermu.</p>
</div>

<!-- Daftar Program dari array di controller -->
<div class="row g-4">
    <?php foreach ($programs as $p): ?>
    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">

                <!-- Icon + Nama -->
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary text-white rounded-circle p-3 me-3 flex-shrink-0"
                         style="width:54px;height:54px;display:flex;align-items:center;justify-content:center">
                        <i class="bi <?= esc($p['icon']) ?> fs-4"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold"><?= esc($p['nama']) ?></h5>
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i><?= esc($p['durasi']) ?>
                        </small>
                    </div>
                </div>

                <!-- Deskripsi -->
                <p class="card-text text-muted small"><?= esc($p['deskripsi']) ?></p>

                <!-- Harga + Tombol -->
                <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                    <span class="fs-5 fw-bold text-success"><?= esc($p['harga']) ?></span>
                    <a href="<?= site_url('/kontak') ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-send me-1"></i>Daftar Sekarang
                    </a>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
