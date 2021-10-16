<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        if (session()->get('id_siswa')) {
            $id_siswa = session()->get('id_siswa');

            $siswa = Siswa::find($id_siswa);

            return view('/pages/detail', compact('siswa'));
        }

        return view('/pages/detail');
    }

    public function search(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        $siswa = Siswa::where('nisn', $request->nisn)->get();

        if (count($siswa)) {
            $siswa = $siswa[0];

            session(['id_siswa' => $siswa->id]);
        } else {
            session(['id_siswa' => null]);
        }

        return redirect()->route('detail');
    }
}
