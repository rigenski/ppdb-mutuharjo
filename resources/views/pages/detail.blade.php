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
          Pendaftaran PPDB telah berhasil ...
        </div>
        @endif

        @if(session()->get('id_siswa') == null)

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <h4 class="text-danger">NISN tidak terdaftar</h4>
            <h6 class="text-danger">Silahkan melakukan Pendaftaran terlebih dahulu 🔥</h6>
          </div>
          <div class="kirim__section">
            <div class="mb-4">
              <h6 class="font-weight-semibold">PERHATIAN :</h6>
              <small class="m-0 d-block">- Cek Pendaftaran dengan memasukkan
                NISN yang valid.</small>
              <small class="m-0 d-block">- Silahkan lakukan pendaftaran jika belum mendaftar.</small>
            </div>
            <a href="/pendaftaran" class="btn btn-primary py-2 w-100 mb-2">Mulai Pendaftaran</a>
          </div>
        </div>

        @else

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <h4 class="text-success">Terima kasih telah mendaftar ✨</h4>
            <h6 class="text-success">PPDB SMK Muhammadiyah 1 Sukoharjo</h6>
            <div class="row mt-4">
              <div class="col-12 col-md-6">
                <div class="">
                  <label class="mb-0">NISN: </label>
                  <p class="font-weight-medium">{{ $siswa->nisn }}</p>
                </div>
                <div class="">
                  <label class="mb-0">Nama: </label>
                  <p class="font-weight-medium">{{ $siswa->nama }}</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="">
                  <label class="mb-0">Program Keahlian: </label>
                  <p class="font-weight-medium">{{ $siswa->program_keahlian }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="kirim__section">
            <div class="mb-4">
              <h6 class="font-weight-semibold">PERHATIAN :</h6>
              <small class="m-0 d-block">- Cek apakah data sudah benar.</small>
              <small class="m-0 d-block">- Silahkan unduh bukti pendaftaran dengan klik tombol dibawah.</small>
            </div>
            <a href="/detail/bukti_pendaftaran" class="btn btn-success py-2 w-100 mb-2">Unduh Bukti Pendaftaran</a>
            <a href="/konfirmasi" class="btn btn-primary py-2 w-100 mb-2">Konfirmasi Pembayaran</a>
          </div>
        </div>

        @endif

      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection