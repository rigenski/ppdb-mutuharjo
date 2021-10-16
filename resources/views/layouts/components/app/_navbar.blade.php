<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-lg d-flex justify-content-center justify-content-md-between">
    <ul class="navbar-nav flex-row">
      <li class="nav-item @yield('nav__item-pendaftaran')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/pendaftaran">
          <i class="fas fa-pen text-white mr-1 opacity-50 @yield('nav__icon-pendaftaran')"
            style="font-size: 0.74rem;"></i>
          Pendaftaran
        </a>
      </li>
      <li class="nav-item @yield('nav__item-konfirmasi')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/konfirmasi">
          <i class="fas fa-check text-white mr-1 opacity-50 @yield('nav__icon-konfirmasi')"
            style="font-size: 0.82rem;"></i>
          Konfirmasi
        </a>
      </li>
      <li class="nav-item @yield('nav__item-masuk')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/masuk">
          <i class="fas fa-key text-white mr-1 opacity-50 @yield('nav__icon-masuk')" style="font-size: 0.74rem;"></i>
          Masuk
        </a>
      </li>
    </ul>
    <div class="d-none align-items-center d-md-flex">
      <div class="dropdown">
        <a class="dropdown-toggle text-light font-weight-normal pl-2" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/persyaratan-pendaftaran">Persyaratan Pendaftaran</a>
          <a class="dropdown-item" href="/rincian-biaya">Rincian Biaya</a>
          <a class="dropdown-item" href="/profile-sekolah">Profile Sekolah</a>
          <a class="dropdown-item" href="/program-keahlian">Program Keahlian</a>
        </div>
      </div>
      <a href="#" class="text-light font-weight-normal pl-2" data-toggle="modal" data-target="#modal_kontak">
        Kontak
      </a>
    </div>
  </div>
</nav>
<div class="bg-success d-block py-2 d-md-none">
  <div class="container-lg d-flex justify-content-center align-items-center">
    <div class="dropdown">
      <a class="dropdown-toggle text-light font-weight-normal mx-2 pb-1" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Informasi
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/persyaratan-pendaftaran">Persyaratan Pendaftaran</a>
        <a class="dropdown-item" href="/rincian-biaya">Rincian Biaya</a>
        <a class="dropdown-item" href="/profile-sekolah">Profile Sekolah</a>
        <a class="dropdown-item" href="/program-keahlian">Program Keahlian</a>
      </div>
    </div>
    <a href="#" class="text-light font-weight-normal mx-2" data-toggle="modal" data-target="#modal_kontak">
      Kontak
    </a>
  </div>
</div>