<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index(): string
    {
        // Ambil data kontak dari session jika admin sudah mengedit, atau gunakan default
        $kontak = session()->get('kontak_info') ?? [
            'alamat'  => 'Jl. Inspirasi No. 45, Semarang, Jawa Tengah 50132',
            'email'   => 'info@lembagakursusinspirasi.id',
            'telepon' => '(024) 7654-3210',
            'jam'     => 'Senin - Sabtu: 08.00 - 17.00 WIB',
        ];

        $data = [
            'title'  => 'Kontak',
            'kontak' => $kontak,
        ];

        return view('kontak/index', $data);
    }
}
