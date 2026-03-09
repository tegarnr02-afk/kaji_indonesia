<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PelatihanController extends Controller
{
    public function index(): View
    {
        return view('pages.pelatihan', [
            'title' => 'Pelatihan',
            'metaDescription' => 'Program pelatihan Kaji Indonesia untuk peningkatan kompetensi SDM dan profesional.',
        ]);
    }
}
