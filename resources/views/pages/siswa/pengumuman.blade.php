{{-- UTIL --}}

@section('nav__item-siswa-pengumuman', 'active')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.siswa._header')
@include('layouts.components.siswa._navbar')

@section('main')
<main>
  <div class="container-lg d-flex justify-content-center py-4">
    <div class="col-12 col-md-10 col-lg-8 p-0">
      <div class="row">
        <div class="col-12">
          @foreach($pengumuman as $data)
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title border-bottom pb-2 mb-2">{{ $data->judul }}</h5>
              <p class="card-text">{{ $data->deskripsi }}</p>
              <div class="d-flex justify-content-between">
                <p class="card-text m-0"><small class="text-muted">{{ date_format($data->created_at, 'h:i') }}</small>
                </p>
                <p class="card-text m-0"><small class="text-muted">{{ date_format($data->created_at, 'd-m-Y') }}</small>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</main>
@endsection