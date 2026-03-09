<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UmkmController extends Controller
{
    public function index(): View
    {
        return view('pages.umkm', [
            'title' => 'UMKM',
            'metaDescription' => 'Pendampingan dan penguatan kapasitas UMKM oleh Kaji Indonesia.',
        ]);
    }
}
