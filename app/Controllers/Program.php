<?php

namespace App\Controllers;

class Program extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'    => 'Program Kursus',
            'programs' => [
                [
                    'nama'      => 'Desain Web',
                    'durasi'    => '3 Bulan',
                    'harga'     => 'Rp 1.500.000',
                    'icon'      => 'bi-globe',
                    'deskripsi' => 'Pelajari HTML, CSS, JavaScript, dan framework modern untuk membangun website profesional.',
                ],
                [
                    'nama'      => 'Pemrograman',
                    'durasi'    => '4 Bulan',
                    'harga'     => 'Rp 2.000.000',
                    'icon'      => 'bi-code-slash',
                    'deskripsi' => 'Kuasai Python, PHP, dan OOP untuk pengembangan aplikasi nyata.',
                ],
                [
                    'nama'      => 'Desain Grafis',
                    'durasi'    => '2 Bulan',
                    'harga'     => 'Rp 1.200.000',
                    'icon'      => 'bi-palette',
                    'deskripsi' => 'Belajar Photoshop, Illustrator, dan CorelDRAW untuk karya visual memukau.',
                ],
                [
                    'nama'      => 'Digital Marketing',
                    'durasi'    => '2 Bulan',
                    'harga'     => 'Rp 1.000.000',
                    'icon'      => 'bi-megaphone',
                    'deskripsi' => 'Strategi pemasaran digital: SEO, media sosial, hingga Google Ads.',
                ],
                [
                    'nama'      => 'Microsoft Office',
                    'durasi'    => '1 Bulan',
                    'harga'     => 'Rp 600.000',
                    'icon'      => 'bi-file-earmark-word',
                    'deskripsi' => 'Word, Excel, PowerPoint, dan Outlook untuk keperluan perkantoran profesional.',
                ],
                [
                    'nama'      => 'Fotografi & Video',
                    'durasi'    => '2 Bulan',
                    'harga'     => 'Rp 1.300.000',
                    'icon'      => 'bi-camera',
                    'deskripsi' => 'Teknik fotografi dasar hingga mahir, editing foto dan video dengan Adobe Premiere.',
                ],
            ],
        ];

        return view('program/index', $data);
    }
}
