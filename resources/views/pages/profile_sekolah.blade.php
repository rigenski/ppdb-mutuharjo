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
          <h4 class="text-white mb-0">Profile Sekolah</h4>
          <h4 class="text-white">SMK Muhammadiyah 1 Sukoharjo</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2022/2023</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">SMK Muhammadiyah 1 Sukoharjo</h5>
            </div>
            <div class="">
              <div class="mb-4 d-flex justify-content-center">
                <img src="{{ asset('images/logo-sekolah.png') }}" height="180" alt="Logo SMK Muhammadiyah 1 Sukoharjo">
              </div>
              <div class="mb-4">
                <h6># Visi</h6>
                <p class="mb-0">Sekolah unggul yang menghasilkan lulusan beriman, bertaqwa,berakhlaq mulia, kompeten,
                  mandiri dan tangguh menghadapi era global</p>
              </div>
              <div class="mb-4">
                <h6># Misi</h6>
                <p class="mb-0">a. Menumbuhkan karakter melalui pembiasaan nilai nilai Islami</p>
                <p class="mb-0">b. Menguatkan pendidikan ketarunaan</p>
                <p class="mb-0">c. Menerapkan budaya industri di lingkungan sekolah</p>
                <p class="mb-0">d. Menerapkan pembelajaran berbasis industri</p>
                <p class="mb-0">e. Menerapkan pembelajaran active learning</p>
                <p class="mb-0">f. Melaksanakan uji kompetensi melalui industri dan atau lembaga sertifikasi profesi</p>
                <p class="mb-0">g. Membangun sumber daya manusia yang mandiri dan profesional</p>
                <p class="mb-0">h. Menerapkan sistem manajemen mutu dan pelayanan prima secara konsisten dan
                  berkelanjutan</p>
              </div>
              <div class="mb-4">
                <h6># Tujuan</h6>
                <p class="mb-0">a. Menghasilkan lulusan yang berakhlaq mulia, santun dan percaya diri</p>
                <p class="mb-0">b. Menghasilkan lulusan yang mampu berwira usaha dan siap memasuki lapangan kerja atau
                  pendidikan yang lebih tinggi.</p>
                <p class="mb-0">c. Menghasilkan lulusan yang handal dan mampu bersaing di era global</p>
                <p class="mb-0">d. Mewujudkan kepuasan pelanggan</p>
                <p class="mb-0">e. Mewujudkan perilaku warga sekolah yang sesuai dengan budaya industri</p>
                <p class="mb-0"></p>
                <p class="mb-0"></p>
              </div>
              <div class="mb-4">
                <h6># Slogan</h6>
                <p class="mb-0 font-italic font-weight-medium">“ Disiplin, Cerdas, Sukses ”</p>
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