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
          <h4 class="text-white mb-0">Program Keahlian</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Pengembangan Perangkat Lunak dan Game</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Skill Target</h6>
                <p class="mb-0">a. Merakit, instalasi dan menggunakan sistem operasi</p>
                <p class="mb-0">b. Menggunakan Bahasa Pemrograman Komputer (Desktop/Web)</p>
                <p class="mb-0">c. Merancang, membuat dan mengelola aplikasi pengelolaan data</p>
              </div>
              <div class="mb-4">
                <h6># Fasilitas laboratorium</h6>
                <p class="mb-0">Lab Teaching Factory, Multimedia, SAS, Maintenance dan Repair</p>
              </div>
              <div class="mb-4">
                <h6># Keunggulan</h6>
                <p class="mb-0">a. Menggunakan world class curiculum dan world class methodology</p>
                <p class="mb-0">b. Buku pembelajaran dari NIIT India</p>
                <p class="mb-0">c. Lulusan bisa bekerja sebagai karyawan pada industri komputer, teknisi di kantor,
                  hotel, perusahaan, perbankan, rumah sakit, supermarket, PLN, Telkom, berwirausaha dan melanjutkan ke
                  perguruan tinggi.</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Teknik Mesin</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Lapangan Kerja </h6>
                <p class="mb-0">Operator mesin-mesin industri berat dan ringan, operator mesin bubut, frais, skrap, dan
                  mesin las fabrikasi. Mengelola usaha perbengkelan mesin dan teknik industri.</p>
              </div>
              <div class="mb-4">
                <h6># Keunggulan </h6>
                <p class="mb-0">Kerjasama perekrutan tenaga kerja dengan PT. Diametral Involute Pulogadung(perusahaan
                  dibidang Machining Of Mechanical Metal Part For The Automative Industry )</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Teknik Komputer Jaringan dan Telekomunikasi</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Fasilitas Laboraturium </h6>
                <p class="mb-0">Network, Multimedia, Maintenan dan Repair ( MR )</p>
              </div>
              <div class="mb-4">
                <h6># Keunggulan </h6>
                <p class="mb-0">a. Program ini menggunakan kurikulum Mitra Akses Globalindo, sarana dan prasarana alat
                  praktek berstandar industri.</p>
                <p class="mb-0">b. Lulusan bisa bekerja sebagai karyawan pada industri komputer, teknisi di kantor,
                  hotel, perusahaan, perbankan, rumah sakit, supermarket, PLN, Telkom, berwirausaha dan melanjutkan ke
                  perguruan tinggi.</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Teknik Elektronika</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Fasilitas Laboraturium </h6>
                <p class="mb-0">Bengkel Kendali Industri, Bengkel Instalasi, Bengkel Mekanik Elektro dan MR</p>
              </div>
              <div class="mb-4">
                <h6># Keunggulan </h6>
                <p class="mb-0">a. Kurikulum yang digunakan merupakan kolaborasi dengan PT. Robota Indonesia.</p>
                <p class="mb-0">b. Menghasilkan lulusan yang terampil dalam bidang perancangan,perakitan dan pemrograman
                  robotik.</p>
                <p class="mb-0">c. Siswa lulus mendapatkan ijasah SMK dan Seritifikat Robotik dari PT. Robota Indonesia
                </p>
                <p class="mb-0">d. Lulusan bisa bekerja di perusahaan manufacturing, berwirausaha dan melanjutkan ke
                  perguruan tinggi.
                </p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Teknik Otomotif</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Fasilitas </h6>
                <p class="mb-0">Bengkel Engine, Bengkel Listrik, Bengkel Pemindah Tenaga, Bengkel Chasis, Bengkel Alat
                  Ukur, Bengkel kelistrikan dan Bengkel pengelasan</p>
              </div>
              <div class="mb-4">
                <h6># Keunggulan </h6>
                <p class="mb-0">a. Bekerjasama dengan PT. Astra Daihatsu Motor</p>
                <p class="mb-0">b. Bekerjasama dengan PT. Nasmoco (sub dealer mobil Toyota wilayah Jateng/DIY) dalam uji
                  kompetensi dan program perekrutan PSG Nasmoco,
                  robotik.</p>
                <p class="mb-0">c. Lulusan bisa bekerja di perakitan mobil berbagai merk, industri manufacturing,
                  mekanik
                  dealer mobil, berwirausaha dan melanjutkan ke perguruan tinggi.
                </p>
                <p class="mb-0">d. Penambahan kurikulum dan kegiatan siswa yang berkaitan dengan entrepreneurship,
                  sehingga terciptanya seorang Teknopreneur
                </p>
                <p class="mb-0">e. Program ini menggunakan kurikulum Yamaha, sarana dan alat praktek standar Yamaha.
                </p>
                <p class="mb-0">f. Siswa lulus mendapatkan ijasah SMK dan Seritifikat Basic Mechanic Training (BMT)
                </p>
                <p class="mb-0">g. Labor recruitment oleh dealer resmi sepeda motor Yamaha, (Labor recruitment oleh
                  dealer sepeda motor berbagai merk: Honda, Suzuki, Kawasaki, Yamaha, dan bengkel umum untuk Teknik
                  sepeda motor reguler)
                </p>
                <p class="mb-0">h. Lulusan bisa bekerja di industri perakitan sepeda motor berbagai merk, industri
                  manufacturing, berwirausaha dan melanjutkan ke perguruan tinggi.
                </p>
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