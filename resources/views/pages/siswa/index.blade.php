{{-- UTIL --}}

@section('nav__item-siswa', 'active')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.siswa._header')
@include('layouts.components.siswa._navbar')

@section('main')
<main>
  <div class="container-lg d-flex justify-content-center py-4">
    <div class="col-12 col-md-10 col-lg-8 p-0">
      <div class="alert alert-info py-3" role="alert">
        <h4 class="alert-heading text-dark">Selamat, {{ $siswa->nama }} !</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer
          so
          that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>
      <div class="row mb-4">
        <div class="col-12 col-sm-6">
          <div class="card bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title text-light font-weight-medium">Pengumuman</h5>
              <p class="card-text text-light">With supporting text below as a natural lead-in to additional content.</p>
              <div class="text-right">
                <a href="/siswa/pengumuman" class="btn btn-light">Buka</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="card bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title text-light font-weight-medium">Daftar Ulang</h5>
              <p class="card-text text-light">With supporting text below as a natural lead-in to additional content.</p>
              <div class="text-right">
                <a href="/siswa/daftar-ulang" class="btn btn-light">Buka</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="{{ route('logout') }}" class="btn btn-danger">Keluar</a>
      </div>
    </div>
  </div>
</main>
@endsection