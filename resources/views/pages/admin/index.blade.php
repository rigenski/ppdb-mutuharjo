@extends('layouts.admin')
@section('nav__item-admin', 'active')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-lg- col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pendaftar</h4>
        </div>
        <div class="card-body">
          {{ $siswa->count() }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg- col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-info">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pengumuman</h4>
        </div>
        <div class="card-body">
          {{ $pengumuman->count() }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Total Pendaftar per Jurusan</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Progress</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Teknik Otomotif</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $to / 252 * 100 }}" style="width: 100px;"></div>
                  </div>
                </td>
                <td>{{ $to }} / 252</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Teknik Mesin</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $tm / 64 * 100 }}" style="width: 100px;"></div>
                  </div>
                </td>
                <td>{{ $tm }} / 64</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Teknik Elektronika</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $te / 72 * 100 }}" style="width: 100px;"></div>
                  </div>
                </td>
                <td>{{ $te }} / 36</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Teknik Komputer Jaringan dan Telekomunikasi</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $tkjt / 72 * 100 }}" style="width: 100px;">
                    </div>
                  </div>
                </td>
                <td>{{ $tkjt }} / 72</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Pengembangan Perangkat Lunak dan Gim</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $pplg / 72 * 100 }}" style="width: 100px;">
                    </div>
                  </div>
                </td>
                <td>{{ $pplg }} / 72
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection