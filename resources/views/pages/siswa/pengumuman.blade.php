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
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title border-bottom pb-2 mb-2">Card Title</h5>
              <p class="card-text">This is another card with title and supporting text below. This card has
                some
                additional content to make it slightly taller overall.</p>
              <div class="d-flex justify-content-between">
                <p class="card-text m-0"><small class="text-muted">11:12</small></p>
                <p class="card-text m-0"><small class="text-muted">30-10-2021</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection