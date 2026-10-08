<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArchitectureController extends Controller
{
    public function dashboard(): View
    {
        $structures = [
            [
                'name' => 'app/',
                'function' => 'Tempat kode utama aplikasi seperti Controller, Model, dan Service.',
            ],
            [
                'name' => 'routes/',
                'function' => 'Mendefinisikan URL dan menghubungkannya dengan Controller atau View.',
            ],
            [
                'name' => 'resources/views/',
                'function' => 'Tempat file Blade untuk tampilan antarmuka aplikasi.',
            ],
            [
                'name' => 'public/',
                'function' => 'Folder yang menjadi akses publik aplikasi dan menyimpan asset seperti CSS dan JavaScript.',
            ],
            [
                'name' => 'config/',
                'function' => 'Menyimpan konfigurasi aplikasi Laravel.',
            ],
            [
                'name' => 'database/',
                'function' => 'Berisi migration, seeder, dan factory untuk pengelolaan struktur serta data database.',
            ],
            [
                'name' => 'storage/',
                'function' => 'Menyimpan file hasil proses aplikasi seperti log, cache, dan file yang dihasilkan.',
            ],
            [
                'name' => 'vendor/',
                'function' => 'Berisi dependency PHP yang dikelola oleh Composer.',
            ],
        ];

        return view('architecture', compact('structures'));
    }

    public function lifecycle(): View
    {
        return view('lifecycle');
    }

    public function environment(): View
    {
        $environment = [
            'application' => config('app.name'),
            'environment' => app()->environment(),
            'debug' => config('app.debug') ? 'Enabled' : 'Disabled',
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
        ];

        return view('environment', compact('environment'));
    }
}