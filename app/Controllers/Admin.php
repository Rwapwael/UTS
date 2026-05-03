<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        // Data kontak default atau dari session jika sudah diedit
        $kontak = session()->get('kontak_info') ?? [
            'alamat'  => 'Jl. Inspirasi No. 45, Semarang, Jawa Tengah 50132',
            'email'   => 'info@lembagakursusinspirasi.id',
            'telepon' => '(024) 7654-3210',
            'jam'     => 'Senin - Sabtu: 08.00 - 17.00 WIB',
        ];

        $data = [
            'title'  => 'Dashboard Admin',
            'kontak' => $kontak,
        ];

        return view('admin/dashboard', $data);
    }

    public function updateKontak()
    {
        $kontak = [
            'alamat'  => $this->request->getPost('alamat'),
            'email'   => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'jam'     => $this->request->getPost('jam'),
        ];

        // Simpan ke session (sesuai soal: bukan database)
        session()->set('kontak_info', $kontak);
        session()->setFlashdata('success', 'Data kontak berhasil diperbarui!');

        return redirect()->to('/admin/dashboard');
    }
}
