<?php
/**
 * components/footer.php
 * Copyright, menu cepat, dan kontak singkat.
 */
?>
<footer class="py-5 mt-auto">
    <div class="container">
        <div class="row g-4">

            <!-- Kolom 1: Brand -->
            <div class="col-md-4">
                <h5 class="text-white fw-bold mb-2">
                    <i class="bi bi-mortarboard-fill me-2 text-warning"></i>LK Inspirasi
                </h5>
                <p class="small mb-0">
                    Mencetak talenta digital terbaik yang siap bersaing di era industri 4.0.
                    Bergabunglah bersama ribuan alumni sukses kami.
                </p>
            </div>

            <!-- Kolom 2: Menu Cepat -->
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-2">Menu Cepat</h6>
                <ul class="list-unstyled small">
                    <li class="mb-1"><a href="<?= site_url('/home') ?>"    class="text-decoration-none"><i class="bi bi-chevron-right me-1"></i>Beranda</a></li>
                    <li class="mb-1"><a href="<?= site_url('/program') ?>" class="text-decoration-none"><i class="bi bi-chevron-right me-1"></i>Program Kursus</a></li>
                    <li class="mb-1"><a href="<?= site_url('/kontak') ?>"  class="text-decoration-none"><i class="bi bi-chevron-right me-1"></i>Kontak</a></li>
                    <li>            <a href="<?= site_url('/login') ?>"    class="text-decoration-none"><i class="bi bi-chevron-right me-1"></i>Login Admin</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak Singkat -->
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-2">Hubungi Kami</h6>
                <p class="small mb-1"><i class="bi bi-geo-alt text-warning me-2"></i>Jl. Inspirasi No. 45, Semarang</p>
                <p class="small mb-1"><i class="bi bi-telephone text-warning me-2"></i>(024) 7654-3210</p>
                <p class="small mb-0"><i class="bi bi-envelope text-warning me-2"></i>info@lembagakursusinspirasi.id</p>
            </div>

        </div>

        <hr class="border-secondary mt-4">

        <p class="text-center small mb-0">
            &copy; <?= date('Y') ?>
            <strong class="text-white">Lembaga Kursus Inspirasi</strong>.
            Dikembangkan dengan
            <a href="https://codeigniter.com" class="text-warning text-decoration-none">CodeIgniter 4</a>
            &amp; Bootstrap 5.
        </p>
    </div>
</footer>
