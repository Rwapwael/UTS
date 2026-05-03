<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Lembaga Kursus Inspirasi') ?> | LKI</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --lki-primary : #0d6efd;
            --lki-accent  : #fd7e14;
            --lki-dark    : #1a1a2e;
        }
        body          { min-height: 100vh; display: flex; flex-direction: column; background: #f4f6fb; }
        .main-content { flex: 1; }
        .navbar-brand span { color: var(--lki-accent); font-weight: 800; }
        .sidebar-box  { background: #fff; border-radius: .6rem; box-shadow: 0 2px 12px rgba(0,0,0,.07); }
        footer        { background: var(--lki-dark); color: #adb5bd; }
        footer a      { color: #adb5bd; }
        footer a:hover{ color: #fff; }
        .card         { border-radius: .6rem; }
    </style>
</head>
<body>

    <!-- ① Header / Navigasi -->
    <?= $this->include('components/header') ?>

    <!-- ② Konten Utama + Sidebar -->
    <div class="container main-content py-4">
        <div class="row g-4">

            <!-- Konten Halaman -->
            <div class="col-lg-9">
                <?= $this->renderSection('content') ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <?= $this->include('components/sidebar') ?>
            </div>

        </div>
    </div>

    <!-- ③ Footer -->
    <?= $this->include('components/footer') ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
