<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'      => 'Beranda',
            'pengumuman' => [
                'Pendaftaran gelombang 2 dibuka mulai 1 Juni 2026.',
                'Workshop Desain UI/UX gratis untuk peserta baru bulan Juni.',
                'Ujian sertifikasi nasional akan diadakan pada 15 Juli 2026.',
            ],
        ];

        return view('home/index', $data);
    }
}
