@extends('layouts.admin')
@section('nav__item-admin-siswa', 'active')

@section('title', 'Data Pendaftar')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-start">
        <a href="/admin/siswa/buat" class="btn btn-primary mr-2">
          Tambah Pendaftar
        </a>
        <a href="#modal__print" data-toggle="modal"
          onclick="$('#modal__print #form__print').attr('action', '/admin/siswa/1/print')"
          class="btn btn-warning mr-2">Export</a>
        <a href="/admin/siswa/" class="btn btn-info">
          <i class="fas fa-sync-alt text-white"></i>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-end flex-column">
        <form action="/admin/siswa" method="get" class="d-flex">
          <select class="form-control py-0 ml-2" name="jurusan" autocomplete="off" style="height: 2rem;">
            <option value="">-- Semua Jurusan --</option>
            <option value="TO">Teknik Otomotif</option>
            <option value="TP">Teknik Pemesinan</option>
            <option value="TEI">Teknik Elektronika Industri</option>
            <option value="TKJ">Teknik Komputer dan Jaringan</option>
            <option value="PPLG">Pengembangan Perangkat Lunak dan Game</option>
          </select>
          <button class="btn btn-primary ml-2">Cari</button>
        </form>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NISN</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>8771359583169</td>
            <td>Pengembangan Perangkat Lunak dan Game</td>
            <td>Rigen Maulana</td>
            <td>
              <a href="#modal__status" data-toggle="modal"
                onclick="$('#modal__status #form__status').attr('action', '/admin/siswa/1/status')"
                class="badge badge-success mr-2 mb-2">
                <i class="fas fa-circle text-white mr-2" style="font-size: 0.6rem;"></i>
                <span>Aktif</span>
              </a>
            </td>
            <td>
              <a href="/admin/siswa/1" class="btn btn-info mr-2 mb-2">Detail</a>
              <a href="#modal__print" data-toggle="modal"
                onclick="$('#modal__print #form__print').attr('action', '/admin/siswa/1/print')"
                class="btn btn-warning mr-2 mb-2">Cetak</a>
              <div class="dropdown d-inline mr-2">
                <button class="btn btn-primary dropdown-toggle mb-2" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lainya
                </button>
                <div class="dropdown-menu mr-2" x-placement="bottom-start"
                  style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a href="/admin/siswa/1/ubah" class="dropdown-item text-warning font-weight-bolder">Ubah</a>
                  <a href="#modal__delete" data-toggle="modal"
                    onclick="$('#modal__delete #form__delete').attr('action', '/admin/siswa/1/destroy')"
                    class="dropdown-item text-danger font-weight-bolder">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('modal')

<!-- Modal Export -->
<div class="modal fade" id="modal__export" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__export" action="/admin/siswa/export" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengunduh data pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Status -->
<div class="modal fade" id="modal__status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__status" action="/admin/siswa/store" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengubah status pendaftar ?</h5>
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

<!-- Modal Print -->
<div class="modal fade" id="modal__print" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__print" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengunduh dokumen pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal__delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__delete" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin menghapus pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-danger ml-2">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection