<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::orderBy('id', 'DESC')->get();

        return view('/pages/admin/pengumuman/index', compact('pengumuman'));
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.pengumuman')->with('error', 'Pengumuman gagal ditambahkan');
        }

        Pengumuman::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.pengumuman')->with('error', 'Pengumuman gagal ditambahkan');
        }

        $pengumuman = Pengumuman::find($id);

        $pengumuman->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function destroy(Request $request)
    {
        Pengumuman::find($request->id)->delete();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dihapus');
    }
}
