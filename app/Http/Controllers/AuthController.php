<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('pages.login', [
            'title' => 'Masuk',
            'metaDescription' => 'Masuk ke akun Kaji Indonesia.',
        ]);
    }

    public function register(): View
    {
        return view('pages.register', [
            'title' => 'Daftar',
            'metaDescription' => 'Daftar akun baru di Kaji Indonesia.',
        ]);
    }
}
