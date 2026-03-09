<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class KonsultanController extends Controller
{
    public function index(): View
    {
        return view('pages.konsultan', [
            'title' => 'Konsultan',
            'metaDescription' => 'Layanan konsultasi strategi bisnis, manajemen, dan pengembangan organisasi oleh Kaji Indonesia.',
        ]);
    }
}
