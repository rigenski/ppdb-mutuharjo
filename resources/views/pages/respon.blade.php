{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">

        @if(session('success'))
        <div class="alert alert-success" role="alert">
          Konfirmasi Pembayaran telah berhasil ...
        </div>
        @endif

        @if(session()->get('id_konfirmasi') == null)

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <h4 class="text-danger">NISN tidak terdaftar</h4>
            <h6 class="text-danger">Silahkan ulangi Konfirmasi Pembayaran🔥</h6>
          </div>
          <div class="kirim__section">
            <div class="mb-4">
              <h6 class="font-weight-semibold">PERHATIAN :</h6>
              <small class="m-0 d-block">- Konfirmasi Pembayaran dengan memasukkan
                NISN yang valid.</small>
              <small class="m-0 d-block">- Jika belum mendaftar silahkan melakukan Pendaftaran.</small>
            </div>
            <a href="/konfirmasi" class="btn btn-primary py-2 w-100 mb-2">Konfirmasi Pendaftaran</a>
          </div>
        </div>

        @else

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <h4 class="text-success">Terima kasih telah Konfirmasi Pendaftaran ✨</h4>
            <h6 class="text-success">Silahkan tunggu konfirmasi dari admin melalui Whatsapp atau SMS</h6>
            <div class="row mt-4">
              <div class="col-12 col-md-6">
                <div class="">
                  <label class="mb-0">NISN: </label>
                  <p class="font-weight-medium">{{ $konfirmasi->nisn }}</p>
                </div>
                <div class="">
                  <label class="mb-0">Nama: </label>
                  <p class="font-weight-medium">{{ $konfirmasi->nama }}</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="">
                  <label class="mb-0">Nomer HP: </label>
                  <p class="font-weight-medium">{{ $konfirmasi->nomer_hp }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="kirim__section">
            <div class="mb-4">
              <h6 class="font-weight-semibold">PERHATIAN :</h6>
              <small class="m-0 d-block">- Cek apakah data sudah benar.</small>
              <small class="m-0 d-block">- Silahkan masuk akun dengan klik tombol dibawah untuk ke tahap
                selanjutnya.</small>
            </div>
            <a href="/masuk" class="btn btn-primary py-2 w-100 mb-2">Masuk Akun</a>
          </div>
        </div>

        @endif

      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection