@extends('layouts.app')

@section('main')
<main id="login">
  <div class="container-lg">
    <div class="d-flex justify-content-center align-items-center h-screen">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Masuk,</h2>
          <form action="">
            <label for="username">Username</label>
            <div class="form-group">
              <input type="text" class="form-control rounded-0" id="username" style="width: 20rem" placeholder="qwerty">
            </div>
            <div class="form-group">
              <label for="username">Password</label>
              <input type="text" class="form-control rounded-0" id="password" style="width: 20rem">
            </div>
            <a href="#" class="btn btn-primary w-100 mt-2">Lanjutkan</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection