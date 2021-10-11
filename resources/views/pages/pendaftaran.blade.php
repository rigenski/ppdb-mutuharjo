{{-- UTIL --}}

@section('nav__item-pendaftaran', 'active')
@section('nav__icon-pendaftaran', 'opacity-100')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 py-2">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-primary shadow-sm">
          <h4 class="text-white mb-0">Formulir Pendaftaran PPDB</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <form action="{{ route('pendaftaran.store') }}" method="post">
            @csrf

            {{-- DATA JURUSAN --}}
            <div class="jurusan__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Jurusan</h5>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-check mb-2">
                    <input type="radio" class="form-check-input @error('jurusan') is-invalid @enderror" id="jurusan_to"
                      name="jurusan" value="TO" autocomplete="off" required>
                    <label class="form-check-label" for="jurusan_to">
                      Teknik Otomotif
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input type="radio" class="form-check-input @error('jurusan') is-invalid @enderror" id="jurusan_tm"
                      name="jurusan" value="TM" autocomplete="off" required>
                    <label class="form-check-label" for="jurusan_tm">
                      Teknik Mesin
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input type="radio" class="form-check-input @error('jurusan') is-invalid @enderror" id="jurusan_te"
                      name="jurusan" value="TE" autocomplete="off" required>
                    <label class="form-check-label" for="jurusan_te">
                      Teknik Elektronika
                    </label>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-check mb-2">
                    <input type="radio" class="form-check-input @error('jurusan') is-invalid @enderror"
                      id="jurusan_tkjt" name="jurusan" value="TKJT" autocomplete="off" required>
                    <label class="form-check-label" for="jurusan_tkjt">
                      Teknik Komputer Jaringan dan Telekomunikasi
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input type="radio" class="form-check-input @error('jurusan') is-invalid @enderror"
                      id="jurusan_pplg" name="jurusan" value="PPLG" autocomplete="off" required>
                    <label class="form-check-label" for="jurusan_pplg">
                      Pengembangan Perangkat Lunak dan Game
                    </label>
                  </div>
                </div>
              </div>
            </div>

            {{-- DATA SISWA --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Siswa</h5>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label font-weight-normal">Nama Pendaftar<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Rigen
                      Maulana</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-4 col-form-label font-weight-normal">Tempat Lahir<span
                    class="text-danger">*</span> </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    name="tempat_lahir" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label font-weight-normal">Tanggal Lahir<span
                    class="text-danger">*</span> </label>
                <div class="col-sm-8">
                  <div class="d-flex">
                    <input type="text" class="form-control datepicker  @error('tempat_lahir') is-invalid @enderror"
                      id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" required>
                    <span class="position-absolute right-0" style="right: 1.6rem; top: 0.6rem;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-calendar" viewBox="0 0 16 16">
                        <path
                          d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                      </svg>
                    </span>
                  </div>
                  <small class="form-text text-muted">ex: <span class="text-dark">30-08-2004</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-4 col-form-label font-weight-normal">Jenis Kelamin<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="d-flex py-2">
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin-L" name="jenis_kelamin" value="L" autocomplete="off" required>
                      <label class="form-check-label" for="jenis_kelamin-L">
                        Laki - Laki
                      </label>
                    </div>
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin-P" name="jenis_kelamin" value="P" autocomplete="off" required>
                      <label class="form-check-label" for="jenis_kelamin-P">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label font-weight-normal">Alamat Rumah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <textarea class="form-control @error('jenis_kelamin') is-invalid @enderror" id="alamat" name="alamat"
                    rows="3" autocomplete="off" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="kecamatan" class="col-sm-4 col-form-label font-weight-normal">Kecamatan<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                    name="kecamatan" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Bulu</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="kabupaten" class="col-sm-4 col-form-label font-weight-normal">Kabupaten<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
                    name="kabupaten" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomer_hp" class="col-sm-4 col-form-label font-weight-normal">Nomer HP<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nomer_hp') is-invalid @enderror" id="nomer_hp"
                    name="nomer_hp" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nisn" class="col-sm-4 col-form-label font-weight-normal">NISN<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
                    autocomplete="off" required>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan NISN yang valid untuk
                      digunakan tahap selanjutnya )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="asal_sekolah" class="col-sm-4 col-form-label font-weight-normal">Asal Sekolah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                    name="asal_sekolah" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">SMP N 1 Sukoharjo</span></small>
                </div>
              </div>
            </div>

            {{-- DATA ORANG TUA --}}
            <div class="orang__tua-section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Orang Tua</h5>
              </div>
              <div class="form-group row">
                <label for="nama_ayah" class="col-sm-4 col-form-label font-weight-normal">Nama Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
                    name="nama_ayah" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Suparjo</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan_ayah" class="col-sm-4 col-form-label font-weight-normal">Pekerjaan Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah"
                    name="pekerjaan_ayah" autocomplete="off" required>
                    <option value="">-- Pilih Pekerjaan Ayah --</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Petani">Petani</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Guru">Guru</option>
                    <option value="Dosen">Dosen</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pekerjaan seorang ayah
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama_ibu" class="col-sm-4 col-form-label font-weight-normal">Nama Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
                    name="nama_ibu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Ekowati</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan_ibu" class="col-sm-4 col-form-label font-weight-normal">Pekerjaan Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu"
                    name="pekerjaan_ibu" autocomplete="off" required>
                    <option value="">-- Pilih Pekerjaan Ibu --</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Petani">Petani</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Guru">Guru</option>
                    <option value="Dosen">Dosen</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pekerjaan seorang ibu
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomer_hp_ortu" class="col-sm-4 col-form-label font-weight-normal">Nomer HP Orang Tua<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nomer_hp_ortu') is-invalid @enderror"
                    id="nomer_hp_ortu" name="nomer_hp_ortu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat_ortu" class="col-sm-4 col-form-label font-weight-normal">Alamat Rumah Orang
                  Tua<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <textarea class="form-control @error('alamat_ortu') is-invalid @enderror" id="alamat_ortu"
                    name="alamat_ortu" rows="3" autocomplete="off" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="kecamatan_ortu" class="col-sm-4 col-form-label font-weight-normal">Kecamatan Orang Tua<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('kecamatan_ortu') is-invalid @enderror"
                    id="kecamatan_ortu" name="kecamatan_ortu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="kabupaten_ortu" class="col-sm-4 col-form-label font-weight-normal">Kabupaten Orang Tua<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('kabupaten_ortu') is-invalid @enderror"
                    id="kabupaten_ortu" name="kabupaten_ortu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
                </div>
              </div>
            </div>

            {{-- DATA TAMBAHAN --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Tambahan</h5>
              </div>
              <div class="form-group row">
                <label for="hafalan" class="col-sm-4 col-form-label font-weight-normal">Hafalan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="hafalan" name="hafalan" autocomplete="off">
                  <small class="form-text text-muted">ex: <span class="text-dark">Juz 1-4</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="lulusan_muh" class="col-sm-4 col-form-label font-weight-normal">Lulusan SMP Muh<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="row px-3 py-2">
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('lulusan_muh') is-invalid @enderror"
                        id="lulusan_muh-iya" name="lulusan_muh" value="Iya" autocomplete="off" required>
                      <label class="form-check-label" for="lulusan_muh-iya">
                        Iya
                      </label>
                    </div>
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('lulusan_muh') is-invalid @enderror"
                        id="lulusan_muh-tidak" name="lulusan_muh" value="Tidak" autocomplete="off" required>
                      <label class="form-check-label" for="lulusan_muh-tidak">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="saudara" class="col-sm-4 col-form-label font-weight-normal">Saudara di SMK</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="saudara" name="saudara" autocomplete="off">
                  <small class="form-text text-muted">ex: <span class="text-dark">Rigen Maulana - RPL 1</span></small>
                </div>
              </div>
            </div>

            {{-- DATA KEJUARAAN --}}
            <div class="kejuaraan__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Kejuaraan</h5>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="bg-primary">
                      <th class="text-white font-weight-medium" scope="col">No</th>
                      <th class="text-white font-weight-medium" scope="col">Tingkat</th>
                      <th class="text-white font-weight-medium" scope="col">Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>
                        <select class="form-control" id="kejuaraan1_tingkat" name="kejuaraan_tingkat[]"
                          autocomplete="off">
                          <option value="">-- Pilih Tingkat Kejuaraan --</option>
                          <option value="Sekolah">Sekolah</option>
                          <option value="Kecamatan">Kecamatan</option>
                          <option value="Kabupaten">Kabupaten</option>
                          <option value="Provinsi">Provinsi</option>
                          <option value="Nasional">Nasional</option>
                          <option value="Internasional">Internasional</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" id="kejuaraan1_nama" name="kejuaraan_nama[]"
                          autocomplete="off">
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>
                        <select class="form-control" id="kejuaraan2_tingkat" name="kejuaraan_tingkat[]"
                          autocomplete="off">
                          <option value="">-- Pilih Tingkat Kejuaraan --</option>
                          <option value="Sekolah">Sekolah</option>
                          <option value="Kecamatan">Kecamatan</option>
                          <option value="Kabupaten">Kabupaten</option>
                          <option value="Provinsi">Provinsi</option>
                          <option value="Nasional">Nasional</option>
                          <option value="Internasional">Internasional</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" id="kejuaraan2_nama" name="kejuaraan_nama[]"
                          autocomplete="off">
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>
                        <select class="form-control" id="kejuaraan3_tingkat" name="kejuaraan_tingkat[]"
                          autocomplete="off">
                          <option value="">-- Pilih Tingkat Kejuaraan --</option>
                          <option value="Sekolah">Sekolah</option>
                          <option value="Kecamatan">Kecamatan</option>
                          <option value="Kabupaten">Kabupaten</option>
                          <option value="Provinsi">Provinsi</option>
                          <option value="Nasional">Nasional</option>
                          <option value="Internasional">Internasional</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" id="kejuaraan3_nama" name="kejuaraan_nama[]"
                          autocomplete="off">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <small class="form-text text-muted">nb: <span class="text-dark">( Jika tidak punya kejuaraan bisa
                    dikosongi )</span></small>
              </div>
            </div>

            {{-- SECTION KIRIM --}}
            <div class="kirim__section">
              <div class="mb-4">
                <h6 class="font-weight-semibold">PERHATIAN :</h6>
                <small class="m-0 d-block">- Isian dengan tanda (<span class="text-danger">*</span>) adalah wajib
                  diisi.</small>
                <small class="m-0 d-block">- Silahkan cek kembali seluruh data yang sudah diisi.</small>
                <small class="m-0 d-block">- Dengan mengirim data ini, saya menyatakan sudah mengisi data dengan
                  benar dan
                  lengkap.</small>
              </div>
              <button type="submit" class="btn btn-success py-2 w-100">Kirim Formulir Pendaftaran</button>
            </div>
          </form>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection

{{-- <div class="col-12 col-md-10 alert alert-success alert-dismissible fade show" role="alert">
  Sudah Mengirim Formulir ? Silahkan <a href="/"
    class="text-dark font-weight-medium border-bottom border-dark">Masuk</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> --}}