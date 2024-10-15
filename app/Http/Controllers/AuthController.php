<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('register');
    }

    // Menerima data dari form register dan menampilkan halaman welcome
    public function welcome(Request $request)
    {
        // Mengambil data dari form
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        // Mengembalikan tampilan welcome dengan data nama
        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
