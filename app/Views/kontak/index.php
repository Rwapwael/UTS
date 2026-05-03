<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Judul -->
<div class="mb-4">
    <h2 class="fw-bold text-primary mb-1">
        <i class="bi bi-envelope-at me-2"></i>Kontak Kami
    </h2>
    <p class="text-muted">Hubungi kami untuk informasi lebih lanjut tentang program kursus.</p>
</div>

<div class="row g-4">

    <!-- ── Informasi Kontak ── -->
    <div class="col-md-5">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-3">Informasi Kontak</h5>

                <?php
                $items = [
                    ['icon' => 'bi-geo-alt-fill',  'label' => 'Alamat',          'value' => $kontak['alamat'],  'color' => 'danger'],
                    ['icon' => 'bi-envelope-fill',  'label' => 'Email',           'value' => $kontak['email'],   'color' => 'primary'],
                    ['icon' => 'bi-telephone-fill', 'label' => 'Telepon',         'value' => $kontak['telepon'], 'color' => 'success'],
                    ['icon' => 'bi-clock-fill',     'label' => 'Jam Operasional', 'value' => $kontak['jam'],     'color' => 'warning'],
                ];
                foreach ($items as $item): ?>
                <div class="d-flex mb-4">
                    <div class="text-<?= $item['color'] ?> me-3 fs-5 flex-shrink-0">
                        <i class="bi <?= $item['icon'] ?>"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block"><?= $item['label'] ?></small>
                        <span class="fw-semibold"><?= esc($item['value']) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Sosial Media -->
                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="btn btn-sm btn-outline-primary"  title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"   title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success"  title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ── Form Pesan ── -->
    <div class="col-md-7">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-3">Kirim Pesan</h5>

                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama lengkap Anda">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Nomor HP / WA</label>
                            <input type="tel" class="form-control" placeholder="08xx-xxxx-xxxx">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" placeholder="email@contoh.com">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Program yang Diminati</label>
                            <select class="form-select">
                                <option value="">-- Pilih Program --</option>
                                <option>Desain Web</option>
                                <option>Pemrograman</option>
                                <option>Desain Grafis</option>
                                <option>Digital Marketing</option>
                                <option>Microsoft Office</option>
                                <option>Fotografi &amp; Video</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Pesan</label>
                            <textarea class="form-control" rows="4"
                                      placeholder="Tuliskan pertanyaan atau pesan Anda..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                <i class="bi bi-send me-2"></i>Kirim Pesan
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
