<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Konfirmasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KonfirmasiController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/konfirmasi');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'nomer_hp' => 'required',
            'bukti_pembayaran' => 'required',
        ]);

        $siswa = Siswa::where('nisn', $request->nisn)->get();

        if (count($siswa)) {
            $siswa = $siswa[0];

            $konfirmasi = Konfirmasi::create([
                'nama' => $request->nama,
                'nisn' => $request->nisn,
                'nomer_hp' => $request->nomer_hp,
                'siswa_id' => $siswa->id,
            ]);

            if ($request->hasFile('bukti_pembayaran')) {
                $rand = Str::random(20);
                $name_image = $rand . "." . $request->bukti_pembayaran->getClientOriginalExtension();
                $request->file('bukti_pembayaran')->move('images/konfirmasi/', $name_image);
                $konfirmasi->bukti_pembayaran = $name_image;
                $konfirmasi->save();
            }

            session(['id_konfirmasi' => $konfirmasi->id]);

            return redirect()->route('respon')->with('success', 'success');
        }

        session(['id_konfirmasi' => null]);

        return redirect()->route('respon');
    }

    public function respon()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        if (session()->get('id_konfirmasi')) {
            $id_konfirmasi = session()->get('id_konfirmasi');

            $konfirmasi = Konfirmasi::find($id_konfirmasi);

            return view('/pages/respon', compact('konfirmasi'));
        }

        return view('/pages/respon');
    }
}
