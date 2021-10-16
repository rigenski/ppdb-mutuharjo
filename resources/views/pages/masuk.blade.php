{{-- UTIL --}}

@section('nav__item-masuk', 'active')
@section('nav__icon-masuk', 'opacity-100')

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
          <h4 class="text-white mb-0">Masuk Akun PPDB</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>

        @if(session('error'))
        <div class="alert alert-danger mt-3" role="alert">
          {{ session('error') }}
        </div>
        @endif

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <form action="{{ route('login.store') }}" method="post">
            @csrf

            {{-- DATA SISWA --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Akun</h5>
              </div>
              <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label font-weight-normal">NISN<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
                    name="username" autocomplete="off" required>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan NISN yang valid saat
                      digunakan untuk pendaftaran )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label font-weight-normal">PIN<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" autocomplete="off" required>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan PIN yang terdapat pada
                      Bukti Pembayaran
                      )</span></small>
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
              <button class="btn btn-success py-2 w-100">Lanjutkan Masuk</button>
            </div>
          </form>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection