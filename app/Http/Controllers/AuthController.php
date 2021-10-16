<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('admin');
        }

        return view('pages/auth/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->get();

        if (count($user)) {
            $user = $user[0];

            if ($user->role === 'admin') {
                Auth::attempt($request->only('username', 'password'));

                if (Auth::check()) {
                    return redirect()->route('admin')->with('success', 'Login telah berhasil!');
                }

                return Redirect::back()->with('error', 'Username atau Password salah!');
            } else if ($user->role === 'siswa') {
                $siswa = Siswa::where('nisn', $request->username)->get();

                if (count($siswa)) {
                    $siswa = $siswa[0];

                    if ($siswa->status) {
                        Auth::attempt($request->only('username', 'password'));

                        if (Auth::check()) {
                            return redirect()->route('siswa')->with('success', 'Berhasil Masuk ...');
                        }

                        return Redirect::back()->with('error', 'PIN yang dimasukkan tidak valid ...');
                    }

                    return Redirect::back()->with('error', 'Silahkan lakukan Konfirmasi Pembayaran ...');
                }

                return Redirect::back()->with('error', 'NISN yang dimasukkan tidak valid ...');
            }
        }

        return Redirect::back()->with('error', 'Data yang dimasukkan tidak valid ...');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
