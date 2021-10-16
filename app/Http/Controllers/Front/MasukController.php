<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/masuk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $siswa = Siswa::where('nisn', $request->username)->get();

        if (count($siswa)) {
            $siswa = $siswa[0];

            if ($siswa->status) {
                Auth::attempt($request->only('username', 'password'));

                if (Auth::check()) {
                    return redirect()->route('siswa')->with('success', 'Berhasil Masuk ...');
                }

                return redirect()->route('masuk')->with('error', 'PIN yang dimasukkan tidak valid ...');
            }

            return redirect()->route('masuk')->with('error', 'Silahkan lakukan Konfirmasi Pembayaran ...');
        }

        return redirect()->route('masuk')->with('error', 'NISN yang dimasukkan tidak valid ...');
    }

    public function keluar()
    {
        Auth::logout();

        return redirect()->route('masuk');
    }
}
