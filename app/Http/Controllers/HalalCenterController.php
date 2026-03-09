<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HalalCenterController extends Controller
{
    public function index(): View
    {
        return view('pages.halal-center', [
            'title' => 'Halal Center',
            'metaDescription' => 'Sertifikasi dan konsultasi halal untuk produk dan proses bisnis oleh Kaji Indonesia.',
        ]);
    }
}
