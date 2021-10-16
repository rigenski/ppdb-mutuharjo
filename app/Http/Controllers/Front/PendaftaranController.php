<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/pendaftaran');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'program_keahlian' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'nomer_hp' => 'required',
            'nisn' => 'required',
            'asal_sekolah' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nomer_hp_ortu' => 'required',
            'alamat_ortu' => 'required',
            'kecamatan_ortu' => 'required',
            'kabupaten_ortu' => 'required',
        ]);

        $nomer_pendaftar = $request->program_keahlian . '-' . rand(1000, 9999);

        if ($request->program_keahlian === 'TO') {
            $program_keahlian = 'Teknik Otomotif';
        } else if ($request->program_keahlian === 'TM') {
            $program_keahlian = 'Teknik Mesin';
        } else if ($request->program_keahlian === 'TE') {
            $program_keahlian = 'Teknik Elektronika';
        } else if ($request->program_keahlian === 'TKJT') {
            $program_keahlian = 'Teknik Komputer Jaringan dan Telekomunikasi';
        } else if ($request->program_keahlian === 'PPLG') {
            $program_keahlian = 'Pengembangan Perangkat Lunak dan Gim';
        }

        $kejuaraan = '';

        for ($x = 0; $x < 3; $x++) {
            $kejuaraan_tingkat = $request->kejuaraan_tingkat[$x] ? $request->kejuaraan_tingkat[$x] : ' ';

            $kejuaraan_nama = $request->kejuaraan_nama[$x] ? $request->kejuaraan_nama[$x] : ' ';

            $kejuaraan .=  $kejuaraan_tingkat . '-' . $kejuaraan_nama;

            if ($x < 2) {
                $kejuaraan .= '|';
            }
        }

        $pin = rand(1000, 9999);

        $user = User::create([
            'role' => 'siswa',
            'username' => $request->nisn,
            'password' => bcrypt($pin),
        ]);

        $siswa = Siswa::create([
            'nomer_pendaftar' => $nomer_pendaftar,
            'program_keahlian' => $program_keahlian,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'nomer_hp' => $request->nomer_hp,
            'nisn' => $request->nisn,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nomer_hp_ortu' => $request->nomer_hp_ortu,
            'alamat_ortu' => $request->alamat_ortu,
            'kecamatan_ortu' => $request->kecamatan_ortu,
            'kabupaten_ortu' => $request->kabupaten_ortu,
            'hafalan' => $request->hafalan ? $request->hafalan : '-',
            'lulusan_muh' => $request->lulusan_muh,
            'saudara' => $request->saudara ? $request->saudara : '-',
            'kejuaraan' => $kejuaraan,
            'pin' => $pin,
            'status' => false,
            'user_id' => $user->id,
        ]);

        session(['id_siswa' => $siswa->id]);

        return redirect()->route('detail')->with('success', 'success');
    }
}
