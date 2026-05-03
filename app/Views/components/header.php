<?php
/**
 * components/header.php
 * Navigasi utama website (logo, menu, tombol login/logout).
 */
$currentUrl = current_url();
$isActive   = fn(string $path) => str_contains($currentUrl, $path) ? 'active fw-semibold' : '';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= site_url('/home') ?>">
            <i class="bi bi-mortarboard-fill fs-4"></i>
            LK<span>Inspirasi</span>
        </a>

        <!-- Toggler mobile -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMain"
                aria-controls="navMain" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-1">

                <li class="nav-item">
                    <a class="nav-link <?= $isActive('/home') ?>"
                       href="<?= site_url('/home') ?>">
                        <i class="bi bi-house-door me-1"></i>Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $isActive('/program') ?>"
                       href="<?= site_url('/program') ?>">
                        <i class="bi bi-book me-1"></i>Program Kursus
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $isActive('/kontak') ?>"
                       href="<?= site_url('/kontak') ?>">
                        <i class="bi bi-envelope me-1"></i>Kontak
                    </a>
                </li>

                <?php if (session()->get('isLoggedIn')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $isActive('/admin') ?>"
                           href="<?= site_url('/admin/dashboard') ?>">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning fw-semibold"
                           href="<?= site_url('/logout') ?>">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/login') ?>">
                            <i class="bi bi-person-circle me-1"></i>Login Admin
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
