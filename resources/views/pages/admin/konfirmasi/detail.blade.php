@extends('layouts.admin')
@section('nav__item-admin-konfirmasi', 'active')

@section('title', 'Konfirmasi')

@section('content')
<div class="card mb-4">
  <div class="card-header">
    <h4>Detail Konfirmasi</h4>
  </div>
  <div class="card-body">
    <h5 class="mb-3 text-warning"># Data Pendaftar</h5>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="">
          <label class="mb-0">NISN: </label>
          <p class="font-weight-bold">{{ $siswa->nisn }}</p>
        </div>
        <div class="">
          <label class="mb-0">Nama: </label>
          <p class="font-weight-bold">{{ $siswa->nama }}</p>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="">
          <label class="mb-0">Program Keahlian: </label>
          <p class="font-weight-bold">{{ $siswa->program_keahlian }}</p>
        </div>
      </div>
    </div>
    <h5 class="mb-3 text-danger"># Data Konfirmasi</h5>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="">
          <label class="mb-0">NISN: </label>
          <p class="font-weight-bold">{{ $konfirmasi->nisn }}</p>
        </div>
        <div class="">
          <label class="mb-0">Nama: </label>
          <p class="font-weight-bold">{{ $konfirmasi->nama }}</p>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="">
          <label class="mb-0">Nomer HP: </label>
          <p class="font-weight-bold">{{ $konfirmasi->nomer_hp }}</p>
        </div>
      </div>
      <div class="col-12">
        <label class="mb-2">Bukti Pembayaran: </label>
        <img src="{{ asset('images/konfirmasi/' . $konfirmasi->bukti_pembayaran ) }}" alt=""
          class="w-100 overflow-auto">
      </div>
    </div>
    <a href="#modal__status" data-toggle="modal"
      onclick="$('#modal__status #form__status').attr('action', '/admin/konfirmasi/{{ $siswa->id }}/status')"
      class="btn btn-success py-2 mt-4 w-100">Aktifkan Data Pendaftar</a>
  </div>
</div>

@endsection

@section('modal')
<!-- Modal Status -->
<div class="modal fade" id="modal__status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__status" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengaktifkan status pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Lanjutkan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection