<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $siswa = $user->siswa;

        return view('/pages/siswa/index', compact('siswa'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();

        return view('pages/siswa/pengumuman', compact('pengumuman'));
    }

    public function daftar_ulang()
    {
        return view('pages/siswa/daftar-ulang');
    }
}
