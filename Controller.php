
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    // Halaman Public
    public function index()
    {
        $biodata = [
            'nama' => 'Vierly Rajaa',
            'kelas' => '11 RPL',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMK',
            'hobi' => 'Bersepeda',
        ];

        return view('welcome', compact('biodata'));
    }

    // Halaman Admin
    public function admin()
    {
        $biodata = [
            'nama' => 'Vierly Rajaa',
            'kelas' => '11 RPL',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMK',
            'hobi' => 'Bersepeda',
        ];

        return view('admin.biodata', compact('biodata'));
    }
}
