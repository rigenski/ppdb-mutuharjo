<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('/pages/pendaftaran');
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'jurusan' => 'required',
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

        $nomer_pendaftar = $request->jurusan . '-' . rand(1000, 9999);

        if ($request->jurusan === 'TO') {
            $jurusan = 'Teknik Otomotif';
        } else if ($request->jurusan === 'TP') {
            $jurusan = 'Teknik Pemesinan';
        } else if ($request->jurusan === 'TEI') {
            $jurusan = 'Teknik Elektronika Industri';
        } else if ($request->jurusan === 'TKJ') {
            $jurusan = 'Teknik Komputer dan Jaringan';
        } else if ($request->jurusan === 'PPLG') {
            $jurusan = 'Pengembangan Perangkat Lunak dan Game';
        }

        $kejuaraan = '';

        for ($x = 0; $x < 3; $x++) {
            $kejuaraan_tinkat = $request->kejuaraan_tingkat[$x] ? $request->kejuaraan_tingkat[$x] : ' ';

            $kejuaraan_nama = $request->kejuaraan_nama[$x] ? $request->kejuaraan_nama[$x] : ' ';

            $kejuaraan .=  $kejuaraan_tinkat . '-' . $kejuaraan_nama;

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

        Siswa::create([
            'nomer_pendaftar' => $nomer_pendaftar,
            'jurusan' => $jurusan,
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
            'hafalan' => $request->hafalan ? $request->hafalan : '',
            'lulusan_muh' => $request->lulusan_muh,
            'saudara' => $request->saudara ? $request->saudara : '-',
            'kejuaraan' => $kejuaraan,
            'pin' => $pin,
            'status' => false,
            'user_id' => $user->id,
        ]);

        return redirect()->route('pendaftaran')->with('success', 'success');
    }
}
