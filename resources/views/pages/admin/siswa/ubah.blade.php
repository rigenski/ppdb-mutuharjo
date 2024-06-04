@extends('layouts.admin')
@section('nav__item-admin-siswa', 'active')

@section('title', 'Data Pendaftar')

@section('content')
<div class="card mb-4">
  <div class=nomer_pendaftar"card-header">
    <h4>Ubah Pendaftar</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('admin.siswa.update', ['id' => $siswa->id]) }}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-6">
            @foreach($major as $value => $label)
            <div class="form-check mb-2">
              <input type="radio" class="form-check-input @error('program_keahlian') is-invalid @enderror"
                id="program_keahlian_{{ $value }}" name="program_keahlian" value="{{ $value }}" autocomplete="off" required
                {{ $siswa->program_keahlian == $label ? 'checked' : '' }}>
              <label class="form-check-label" for="program_keahlian_{{ $value }}">
                {{ $label }}
              </label>
            </div>
          @endforeach

          <div class="form-group mb-3">
            <label for="">No Pendaftar<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomer_pendaftar') is-invalid @enderror" id="nomer_pendaftar" name="nomer_pendaftar"
              autocomplete="off" required value="{{ $siswa->nomer_pendaftar }}">
            <small class="form-text text-muted">ex: <span class="text-dark">12345</span></small>
          </div>

          <div class="form-group mb-3">
            <label for="nama">Nama Pendaftar<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
              autocomplete="off" required value="{{ $siswa->nama }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Rigen
                Maulana</span></small>
          </div>
          <div class="form-group mb-3">
            <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
              name="tempat_lahir" autocomplete="off" required value="{{ $siswa->tempat_lahir }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
          </div>
          <div class="form-group mb-3">
            <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker  @error('tempat_lahir') is-invalid @enderror"
              id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" required value="{{ $siswa->tanggal_lahir }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
          </div>
          <div class="form-group mb-3">
            <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
            <div class="d-flex">
              @if($siswa->jenis_kelamin == 'L')
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                  id="jenis_kelamin-L" name="jenis_kelamin" value="L" autocomplete="off" required checked>
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
              @else
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                  id="jenis_kelamin-L" name="jenis_kelamin" value="L" autocomplete="off" required>
                <label class="form-check-label" for="jenis_kelamin-L">
                  Laki - Laki
                </label>
              </div>
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                  id="jenis_kelamin-P" name="jenis_kelamin" value="P" autocomplete="off" required checked>
                <label class="form-check-label" for="jenis_kelamin-P">
                  Perempuan
                </label>
              </div>
              @endif
            </div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Rumah<span class="text-danger">*</span></label>
            <textarea class="form-control @error('jenis_kelamin') is-invalid @enderror" id="alamat" name="alamat"
              rows="3" autocomplete="off" required>{{ $siswa->alamat }}</textarea>
          </div>
          <div class="form-group">
            <label for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
              name="kecamatan" autocomplete="off" required value="{{ $siswa->kecamatan }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Bulu</span></small>
          </div>
          <div class="form-group">
            <label for="kabupaten">Kabupaten<span class=" text-danger">*</span></label>
            <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
              name="kabupaten" autocomplete="off" required value="{{ $siswa->kabupaten }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
          </div>
          <div class="form-group">
            <label for="nomer_hp">Nomer HP<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomer_hp') is-invalid @enderror" id="nomer_hp"
              name="nomer_hp" autocomplete="off" required value="{{ $siswa->nomer_hp }}">
            <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
          </div>
          <div class="form-group">
            <label for="nisn">NISN<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
              autocomplete="off" required value="{{ $siswa->nisn }}">
            <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan NISN yang valid untuk
                digunakan tahap selanjutnya )</span></small>
          </div>
          <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
              name="asal_sekolah" autocomplete="off" required value="{{ $siswa->asal_sekolah }}">
            <small class="form-text text-muted">ex: <span class="text-dark">SMP N 1 Sukoharjo</span></small>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="nama_ayah">Nama Ayah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
              name="nama_ayah" autocomplete="off" required value="{{ $siswa->nama_ayah }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Suparjo</span></small>
          </div>
          <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah<span class="text-danger">*</span></label>
            <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah"
              name="pekerjaan_ayah" autocomplete="off" required>
              <option value="{{ $siswa->pekerjaan_ayah }}">{{ $siswa->pekerjaan_ayah }}</option>
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
          <div class="form-group">
            <label for="nama_ibu">Nama Ibu<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
              name="nama_ibu" autocomplete="off" required value="{{ $siswa->nama_ibu }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Ekowati</span></small>
          </div>
          <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan Ibu<span class="text-danger">*</span></label>
            <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu"
              name="pekerjaan_ibu" autocomplete="off" required>
              <option value="{{ $siswa->pekerjaan_ibu }}">{{ $siswa->pekerjaan_ibu }}</option>
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
          <div class="form-group">
            <label for="nomer_hp_ortu">Nomer HP Orang Tua<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomer_hp_ortu') is-invalid @enderror" id="nomer_hp_ortu"
              name="nomer_hp_ortu" autocomplete="off" required value="{{ $siswa->nomer_hp }}">
            <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
          </div>
          <div class="form-group">
            <label for="alamat_ortu">Alamat Rumah Orang
              Tua<span class="text-danger">*</span></label>
            <textarea class="form-control @error('alamat_ortu') is-invalid @enderror" id="alamat_ortu"
              name="alamat_ortu" rows="3" autocomplete="off" required>{{ $siswa->alamat_ortu }}</textarea>
          </div>
          <div class="form-group">
            <label for="kecamatan_ortu">Kecamatan Orang Tua<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('kecamatan_ortu') is-invalid @enderror" id="kecamatan_ortu"
              name="kecamatan_ortu" autocomplete="off" required value="{{ $siswa->kecamatan_ortu }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
          </div>
          <div class="form-group">
            <label for="kabupaten_ortu">Kabupaten Orang Tua<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('kabupaten_ortu') is-invalid @enderror" id="kabupaten_ortu"
              name="kabupaten_ortu" autocomplete="off" required value="{{ $siswa->kabupaten_ortu }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Sukoharjo</span></small>
          </div>
          <div class="form-group">
            <label for="hafalan">Hafalan</label>
            <input type="text" class="form-control" id="hafalan" name="hafalan" autocomplete="off"
              value="{{ $siswa->hafalan }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Juz 1-4</span></small>
          </div>
          <div class="form-group">
            <label for="lulusan_muh">Lulusan SMP Muh<span class="text-danger">*</span></label>
            <div class="d-flex py-2">
              @if($siswa->lulusan_muh === 'Iya')
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('lulusan_muh') is-invalid @enderror"
                  id="lulusan_muh-iya" name="lulusan_muh" value="Iya" autocomplete="off" required checked>
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
              @else
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('lulusan_muh') is-invalid @enderror"
                  id="lulusan_muh-iya" name="lulusan_muh" value="Iya" autocomplete="off" required>
                <label class="form-check-label" for="lulusan_muh-iya">
                  Iya
                </label>
              </div>
              <div class="form-check mr-2">
                <input type="radio" class="form-check-input @error('lulusan_muh') is-invalid @enderror"
                  id="lulusan_muh-tidak" name="lulusan_muh" value="Tidak" autocomplete="off" required checked>
                <label class="form-check-label" for="lulusan_muh-tidak">
                  Tidak
                </label>
              </div>
              @endif
            </div>
          </div>
          <div class="form-group">
            <label for="saudara">Saudara di SMK</label>
            <input type="text" class="form-control" id="saudara" name="saudara" autocomplete="off"
              value="{{ $siswa->saudara }}">
            <small class="form-text text-muted">ex: <span class="text-dark">Rigen Maulana RPL 1</span></small>
          </div>
        </div>
      </div>
      <div class="text-center">
        <label for="kejuaraan" class="text-dark">Data Kejuaraan</label>
        <div class="table-responsive px-3">
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
                  <select class="form-control" id="kejuaraan1_tingkat" name="kejuaraan_tingkat[]" autocomplete="off">
                    @if($kejuaraan_tingkat[0] !== ' ')
                    <option value="{{ $kejuaraan_tingkat[0] }}">{{ $kejuaraan_tingkat[0] }}</option>
                    @else
                    <option value="">-- Pilih Tingkat Kejuaraan --</option>
                    @endif
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
                    autocomplete="off" value="{{ $kejuaraan_nama[0] }}">
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>
                  <select class="form-control" id="kejuaraan2_tingkat" name="kejuaraan_tingkat[]" autocomplete="off">
                    @if($kejuaraan_tingkat[1] !== ' ')
                    <option value="{{ $kejuaraan_tingkat[1] }}">{{ $kejuaraan_tingkat[1] }}</option>
                    @else
                    <option value="">-- Pilih Tingkat Kejuaraan --</option>
                    @endif
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
                    autocomplete="off" value="{{ $kejuaraan_nama[1] }}">
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>
                  <select class="form-control" id="kejuaraan3_tingkat" name="kejuaraan_tingkat[]" autocomplete="off">
                    @if($kejuaraan_tingkat[2] !== ' ')
                    <option value="{{ $kejuaraan_tingkat[2] }}">{{ $kejuaraan_tingkat[2] }}</option>
                    @else
                    <option value="">-- Pilih Tingkat Kejuaraan --</option>
                    @endif
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
                    autocomplete="off" value="{{ $kejuaraan_nama[2] }}">
                </td>
              </tr>
            </tbody>
          </table>
          <small class="form-text text-muted">nb: <span class="text-dark">( Jika tidak punya kejuaraan bisa
              dikosongi )</span></small>
        </div>
      </div>
      <button type="submit" class="btn btn-success py-2 mt-4 w-100">Ubah Data Pendafar</button>
    </form>
  </div>
</div>

@endsection
