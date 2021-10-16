{{-- UTIL --}}

@section('nav__item-konfirmasi', 'active')
@section('nav__icon-konfirmasi', 'opacity-100')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-primary shadow-sm">
          <h4 class="text-white mb-0">Konfirmasi Pembayaran PPDB</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <form action="{{ route('konfirmasi.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- DATA SISWA --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Konfirmasi</h5>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label font-weight-normal">Nama Pendaftar<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Rigen
                      Maulana</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nisn" class="col-sm-4 col-form-label font-weight-normal">NISN<span
                    class="text-danger">*</span> </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
                    autocomplete="off" required>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan NISN yang valid saat
                      digunakan untuk pendaftaran )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomer_hp" class="col-sm-4 col-form-label font-weight-normal">Nomer HP ( Whatsapp )<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nomer_hp') is-invalid @enderror" id="nomer_hp"
                    name="nomer_hp" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">08123456789 , nb: (Untuk mengirim
                      status konfirmasi pembayaran)</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="bukti_pembayaran" class="col-sm-4 col-form-label font-weight-normal">Bukti Pembayaran<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="file" class="form-control-file @error('bukti_pembayaran') is-invalid @enderror"
                    id="bukti_pembayaran" name="bukti_pembayaran" accept="image/png, image/jpeg, image/jpg"
                    autocomplete="off" required>
                  <small class="form-text text-muted">nb: <span class="text-dark">(Gambar dengan format .jpg, .jpeg,
                      .png)</span></small>
                </div>
              </div>
            </div>

            {{-- SECTION KIRIM --}}
            <div class="kirim__section">
              <div class="mb-4">
                <h6 class="font-weight-semibold">PERHATIAN :</h6>
                <small class="m-0 d-block">- Isian dengan tanda (<span class="text-danger">*</span>) adalah wajib
                  diisi.</small>
                <small class="m-0 d-block">- Silahkan cek kembali seluruh data yang sudah diisi.</small>
                <small class="m-0 d-block">- Dengan mengirim data ini, saya menyatakan sudah mengisi data dengan
                  benar dan
                  lengkap.</small>
              </div>
              <button class="btn btn-success py-2 w-100">Konfirmasi Pembayaran</button>
            </div>
          </form>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection