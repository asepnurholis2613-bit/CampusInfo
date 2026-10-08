<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $campus = [
            'name' => 'CampusInfo',
            'description' => 'Portal informasi akademik sederhana berbasis Laravel 12.',
            'location' => 'Indonesia',
        ];

        return view('home', compact('campus'));
    }

    public function programStudi(): View
    {
        $programStudi = [
            [
                'kode' => 'TI',
                'nama' => 'Teknik Informatika',
                'deskripsi' => 'Mempelajari pemrograman, perangkat lunak, basis data, dan teknologi informasi.',
            ],
            [
                'kode' => 'SI',
                'nama' => 'Sistem Informasi',
                'deskripsi' => 'Mempelajari penerapan teknologi informasi untuk mendukung proses bisnis dan organisasi.',
            ],
            [
                'kode' => 'MI',
                'nama' => 'Manajemen Informatika',
                'deskripsi' => 'Mempelajari pengelolaan sistem informasi dan kebutuhan teknologi dalam organisasi.',
            ],
            [
                'kode' => 'DKV',
                'nama' => 'Desain Komunikasi Visual',
                'deskripsi' => 'Mempelajari desain visual, komunikasi grafis, dan media digital.',
            ],
        ];

        return view('program-studi', compact('programStudi'));
    }

    public function kontak(): View
    {
        $kontak = [
            'alamat' => 'Jl. Pendidikan No. 10, Indonesia',
            'email' => 'info@campusinfo.test',
            'telepon' => '+62 812-0000-0000',
        ];

        return view('kontak', compact('kontak'));
    }
}