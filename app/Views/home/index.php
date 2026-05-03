<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- ── Hero ─────────────────────────────────── -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body bg-primary text-white rounded p-4 p-md-5">
        <h1 class="display-6 fw-bold lh-sm">
            Selamat Datang di<br>
            <span style="color:#fd7e14">Lembaga Kursus Inspirasi</span>
        </h1>
        <p class="lead mt-2 mb-4 opacity-90">
            Wujudkan potensimu bersama kami. Program kursus berkualitas,
            instruktur berpengalaman, sertifikat diakui industri.
        </p>
        <a href="<?= site_url('/program') ?>" class="btn btn-warning btn-lg fw-bold">
            <i class="bi bi-arrow-right-circle me-2"></i>Lihat Program Kursus
        </a>
        <a href="<?= site_url('/kontak') ?>" class="btn btn-outline-light btn-lg ms-2">
            <i class="bi bi-telephone me-2"></i>Hubungi Kami
        </a>
    </div>
</div>

<!-- ── Visi & Misi ───────────────────────────── -->
<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title text-primary fw-bold">
                    <i class="bi bi-eye-fill me-2"></i>Visi
                </h5>
                <p class="card-text text-muted">
                    Menjadi lembaga kursus terdepan yang mencetak sumber daya manusia
                    unggul, kreatif, dan berdaya saing global di era digital.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title text-primary fw-bold">
                    <i class="bi bi-bullseye me-2"></i>Misi
                </h5>
                <ul class="text-muted small ps-3 mb-0">
                    <li class="mb-1">Memberikan pendidikan keterampilan berkualitas tinggi</li>
                    <li class="mb-1">Menghadirkan instruktur profesional berpengalaman</li>
                    <li class="mb-1">Kurikulum relevan dengan kebutuhan industri</li>
                    <li>Mendukung peserta hingga mendapatkan pekerjaan impian</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ── Statistik ─────────────────────────────── -->
<div class="row g-3 mb-4">
    <?php
    $stats = [
        ['icon' => 'bi-people-fill',    'value' => '2.500+', 'label' => 'Alumni',          'color' => 'primary'],
        ['icon' => 'bi-journal-text',   'value' => '6',      'label' => 'Program Kursus',  'color' => 'success'],
        ['icon' => 'bi-award-fill',     'value' => '98%',    'label' => 'Tingkat Kepuasan','color' => 'warning'],
        ['icon' => 'bi-briefcase-fill', 'value' => '85%',    'label' => 'Langsung Kerja',  'color' => 'danger'],
    ];
    foreach ($stats as $s): ?>
    <div class="col-6 col-md-3">
        <div class="card shadow-sm border-0 text-center p-3 h-100">
            <i class="bi <?= $s['icon'] ?> text-<?= $s['color'] ?> fs-2 mb-2"></i>
            <h4 class="fw-bold text-<?= $s['color'] ?> mb-0"><?= $s['value'] ?></h4>
            <small class="text-muted"><?= $s['label'] ?></small>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- ── Pengumuman ────────────────────────────── -->
<div class="card shadow-sm border-0 mb-2">
    <div class="card-header bg-warning text-dark fw-bold">
        <i class="bi bi-bell-fill me-2"></i>Pengumuman Terbaru
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <?php foreach ($pengumuman as $i => $item): ?>
            <li class="list-group-item d-flex align-items-center gap-3 py-3">
                <span class="badge bg-primary rounded-pill"><?= $i + 1 ?></span>
                <?= esc($item) ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>
