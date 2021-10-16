@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5">
          <img src="{{ asset('images/gedung-mutuharjo.jpg') }}" class="img-fluid mb-3" alt="...">
          <a href="{{ route('pendaftaran') }}" class="btn btn-primary py-2 w-100">Mulai Pendaftaran</a>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection