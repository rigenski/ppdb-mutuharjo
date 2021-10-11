@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">

      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection