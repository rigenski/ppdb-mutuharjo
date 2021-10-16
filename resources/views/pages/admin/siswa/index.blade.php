@extends('layouts.admin')
@section('nav__item-admin-siswa', 'active')

@section('title', 'Data Pendaftar')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-start">
        <a href="{{ route('admin.siswa.buat') }}" class="btn btn-primary mr-2">
          Tambah Pendaftar
        </a>
        <a href="#modal__print" data-toggle="modal"
          onclick="$('#modal__print #form__print').attr('action', '/admin/siswa/export')"
          class="btn btn-warning mr-2">Export</a>
        <a href="/admin/siswa/" class="btn btn-info">
          <i class="fas fa-sync-alt text-white"></i>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-end flex-column">
        <form action="/admin/siswa" method="get" class="d-flex">
          <select class="form-control py-0 ml-2" name="program_keahlian" autocomplete="off" style="height: 2rem;">
            @if($program_keahlian)
            <option value="{{ $program_keahlian }}">{{ $program_keahlian }}</option>
            @endif
            <option value="">-- Semua Program Keahlian --</option>
            <option value="TO">Teknik Otomotif</option>
            <option value="TM">Teknik Mesin</option>
            <option value="TE">Teknik Elektronika</option>
            <option value="TKJT">Teknik Komputer Jaringan dan Telekomunikasi</option>
            <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
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
            <th scope="col">Program Keahlian</th>
            <th scope="col">Nama</th>
            <th scope="col">PIN</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1 ?>
          @foreach($siswa as $data)
          <tr>
            <td>{{ $count }}</td>
            <td>{{ $data->nisn }}</td>
            <td>{{ $data->program_keahlian }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->pin }}</td>
            <td>
              @if($data->status)
              <a href="#modal__status" data-toggle="modal"
                onclick="$('#modal__status #form__status').attr('action', '/admin/siswa/{{ $data->id }}/status')"
                class="badge badge-success mr-2 mb-2">
                <i class="fas fa-circle text-white mr-2" style="font-size: 0.6rem;"></i>
                <span>Aktif</span>
              </a>
              @else
              <a href="#modal__status" data-toggle="modal"
                onclick="$('#modal__status #form__status').attr('action', '/admin/siswa/{{ $data->id }}/status')"
                class="badge badge-danger mr-2 mb-2">
                <i class="fas fa-circle text-white mr-2" style="font-size: 0.6rem;"></i>
                <span>Non-Aktif</span>
              </a>
              @endif
            </td>
            <td>
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
                  <a href="{{ route('admin.siswa.ubah', ['id' => $data->id]) }}"
                    class="dropdown-item text-warning font-weight-bolder">Ubah</a>
                  <a href="#modal__delete" data-toggle="modal"
                    onclick="$('#modal__delete #form__delete').attr('action', '/admin/siswa/{{ $data->id }}/destroy')"
                    class="dropdown-item text-danger font-weight-bolder">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
          <?php $count++ ?>
          @endforeach
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
      <form id="form__status" action="" method="get">
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
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengunduh data seluruh pendaftar ?</h5>
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