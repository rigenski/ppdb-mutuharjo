@extends('layouts.admin')
@section('nav__item-admin-pengumuman', 'active')

@section('title', 'Pengumuman')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-start">
        <a href="#modal__create" data-toggle="modal" class="btn btn-primary mr-2">
          Tambah Pengumuman
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-end flex-column">
        <div>
          @if(session('success'))
          <div class="alert alert-success p-1 px-4 m-0">
            {{ session('success') }}
          </div>
          @elseif(session('error'))
          <div class="alert alert-danger p-1 px-4 m-0">
            {{ session('error') }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach ($pengumuman as $data)
          <tr>
            <th scope="row">{{ $count }}</th>
            <td>{{ substr( $data->judul, 0, 20) }} ...</td>
            <td>{{ substr( $data->deskripsi, 0, 40) }} ...</td>
            <td>{{ date_format($data->created_at, 'd-m-Y | h:i') }}</td>
            <td>
              <a href="#modal__detail" data-toggle="modal"
                onclick="$('#modal__detail #judul').text('{{ $data->judul }}');$('#modal__detail #deskripsi').text('{{ $data->deskripsi }}');$('#modal__detail #tanggal').text('{{ $data->created_at }}');"
                class="btn btn-info mr-2 mb-2">Detail</a>
              <div class="dropdown d-inline mr-2">
                <button class="btn btn-primary dropdown-toggle mb-2" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lainya
                </button>
                <div class="dropdown-menu mr-2" x-placement="bottom-start"
                  style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a href="#modal__edit" data-toggle="modal"
                    onclick="$('#modal__edit #form__edit').attr('action', '/admin/pengumuman/{{ $data->id }}/update');$('#modal__edit #form__edit #judul').attr('value', '{{ $data->judul }}');$('#modal__edit #form__edit #deskripsi').text('{{ $data->deskripsi }}');"
                    class="dropdown-item text-warning font-weight-bolder">Ubah</a>
                  <a href="#modal__delete" data-toggle="modal"
                    onclick="$('#modal__delete #form__delete').attr('action', '/admin/pengumuman/{{ $data->id }}/destroy')"
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

<!-- Modal Create -->
<div class="modal fade" id="modal__create" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.pengumuman.store') }}" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengumuman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" required class="form-control @error('judul') is-invalid @enderror" id="judul"
              name="judul">
            @error('judul')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
              required></textarea>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="modal__detail" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="media mb-4">
          <div class="media-body pb-2">
            <div id="judul" class="media-title mb-1">This is Title</div>
            <div id="tanggal" class="text-time">Yesterday</div>
            <div id="deskripsi" class="media-description text-muted">Duis aute irure dolor in reprehenderit in voluptate
              velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modal__edit" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__edit" action="" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Pengumuman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" required class="form-control @error('judul') is-invalid @enderror" id="judul"
              name="judul" value="">
            @error('judul')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
              required></textarea>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal__delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__delete" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin menghapus pengumuman?</h5>
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