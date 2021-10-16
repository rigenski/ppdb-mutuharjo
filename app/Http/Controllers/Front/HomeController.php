<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/index');
    }

    public function persyaratan_pendaftaran()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/persyaratan_pendaftaran');
    }

    public function program_keahlian()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/program_keahlian');
    }

    public function profile_sekolah()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/profile_sekolah');
    }

    public function rincian_biaya()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/rincian_biaya');
    }
}
