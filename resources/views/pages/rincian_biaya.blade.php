{{-- UTIL --}}

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-success shadow-sm">
          <h4 class="text-white mb-0">Rincian Biaya</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Uraian Pembiayaan</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Deskripsi</h6>
                <p class="mb-0">Dalam hal pembiayaan SMK Muhammadiyah 1 Sukoharjo sangat transparan, semua dijelaskan
                  diawal. Sehingga tidak ada biaya yang tidak terinci. Adapun model pembiayaan yang kami lakukan sebagai
                  berikut: </p>
              </div>
              <div class="mb-4">
                <h6># Biaya Masuk</h6>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="font-weight-medium text-center" scope="col">SMK MUHAMMADIYAH 1 SUKOHARJO</th>
                        <th class="font-weight-medium text-center" scope="col">SEKOLAH LAIN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p class="font-weight-medium mb-2">Biaya Rp. 2.500.000</p>
                          <p class="font-weight-medium mb-2">Bisa diangsur Rp. 500.000 (Sudah mendapat seragam)</p>
                          <p class="mb-2">Rincian kegunaan biaya:</p>
                          <p class="font-weight-medium mb-2">A. Seragam Sekolah</p>
                          <div class="ml-2">
                            <p class="mb-2">a. Seragam Hari Senin – Selasa (Osis)</p>
                            <p class="mb-2">b. Seragam Hari Rabu – Kamis (Kejuruan)</p>
                            <p class="mb-2">c. Seragam Hari Jumat (Hizbul Wathan)</p>
                            <p class="mb-2">d. Seragam Bengkel (Werpack)</p>
                            <p class="mb-2">e. Seragam Olahraga</p>
                            <p class="mb-2">f. Seragam Tapak Suci</p>
                            <p class="mb-2">g. Atribut Sekolah ( Topi, Dasi, Ikat Pinggang, Kaos Kaki, 3 kerudung bagi
                              siswi)</p>
                          </div>
                          <p class="font-weight-medium mb-2">B. Sepatu Safety</p>
                          <p class="font-weight-medium mb-2">C. PLS (Pengenalan Lingkungan Sekolah)</p>
                          <p class="font-weight-medium mb-2">D. Toolkit kejuruan</p>
                          <p class="font-weight-medium mb-2">E. Kegiatan Pendidikan Karakter (Ketarunaan)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-2">Biaya Masuk Rp. 1.500.000,-</p>
                          <p class="mb-2">Tidak ada rincian kegunaan biaya.</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="mb-4">
                <h6># Uang Gedung</h6>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="font-weight-medium text-center" scope="col">SMK MUHAMMADIYAH 1 SUKOHARJO</th>
                        <th class="font-weight-medium text-center" scope="col">SEKOLAH LAIN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p class="mb-2">Sekolah akan mengundang bapak ibu walisiswa untuk
                            membicarakan besaran uang gedung dan disepakati oleh sekolah dan walisiswa</p>
                        </td>
                        <td>
                          <p class="mb-2"><span class="font-weight-medium">Rp. 4.000.000,-</span>
                            Langsung ditentukan oleh sekolah, tanpa kesepakatan antara sekolah dengan walisiswa</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="mb-4">
                <h6># Biaya Per Bulan</h6>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="font-weight-medium text-center" scope="col" colspan="2">SMK MUHAMMADIYAH 1 SUKOHARJO
                        </th>
                        <th class="font-weight-medium text-center" scope="col" colspan="2">SEKOLAH LAIN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="2">
                          <p class="font-weight-medium mb-0 text-center">Modal BOP (Biaya Operasional Pendidikan)</p>
                        </td>
                        <td colspan="2">
                          <p class="font-weight-medium mb-0 text-center">Model SPP (Sumbangan Pembinaan Pendidikan)</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p class="font-weight-medium mb-0 text-center">BOP Rp. 365.000,-</p>
                        </td>
                        <td colspan="2">
                          <p class="font-weight-medium mb-0 text-center">SPP Rp. 150.000,-</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya buku/LKS</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya buku/LKS</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya Praktik jurusan</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya Praktik jurusan</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya Ujian (Ujian Tengah Semester, Ujian Akhir Semester, Ujian Nasional)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya Ujian (Ujian Tengah Semester, Ujian Akhir Semester, Ujian Nasional)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Asuransi Siswa</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Asuransi Siswa</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya Kunjungan Industri</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya Kunjungan Industri</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya PKL (Praktik Kerja Lapangan)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya PKL (Praktik Kerja Lapangan)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Biaya seragam olahraga (setiap tahun ganti)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Biaya seragam olahraga (setiap tahun ganti)</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Daftar Ulang setiap kenaikan kelas</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Daftar Ulang setiap kenaikan kelas</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Nyembelih Qurban di sekolah</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Nyembelih Qurban di sekolah</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0">Kalender Tahunan</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Tidak</p>
                        </td>
                        <td>
                          <p class="mb-0">Kalender Tahunan</p>
                        </td>
                        <td>
                          <p class="font-weight-medium mb-0">Bayar</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p class="mb-0 font-weight-medium">Kesimpulannya Biaya per bulan di SMK Muhammadiyah 1 Sukoharjo sudah
                  mencakup keperluan biaya siswa dalam pendidikan, dan tidak ada penarikan biaya lagi selain itu selama
                  3 tahun.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection