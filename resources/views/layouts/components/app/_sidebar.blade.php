<div id="sidebar" class="col-12 col-lg-3 mb-4">
  <div class="row">
    <div class="col-12 mb-4">
      <div class="d-flex align-items-center mb-3">
        <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
        <h5 class="ml-3">Cek Pendaftaran:</h5>
      </div>
      <form action="/detail/search" method="post">
        @csrf
        <div class="d-flex justify-content-center justify-content-lg-start">
          <input type="text" class="cek__pendaftaran-input form-control mr-1" id="nisn" name="nisn" autocomplete="off"
            placeholder="Masukkan NISN">
          <button type="submit" class="btn btn-success ml-1">
            <i class="fas fa-search text-light"></i>
          </button>
      </form>
    </div>
  </div>
  <div class="col-lg-12 col-sm-6 col-12 mb-4">
    <div class="d-flex align-items-center mb-3">
      <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
      <h5 class="ml-3">Alur PPDB Online:</h5>
    </div>
    <div class="">
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">1
        </div>
        <p class="m-0">Mulai Pendaftaran</p>
      </a>
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">2
        </div>
        <p class="m-0">Unduh Bukti Pendaftaran</p>
      </a>
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">3
        </div>
        <p class="m-0">Bayar Biaya Pendaftaran</p>
      </a>
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">4
        </div>
        <p class="m-0">Konfirmasi Pembayaran</p>
      </a>
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">5
        </div>
        <p class="m-0">Masuk Akun PPDB</p>
      </a>
      <a href="#" class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">6
        </div>
        <p class="m-0">Info Pengumuman</p>
      </a>
    </div>
  </div>
  <div class="col-lg-12 col-sm-6 col-12 mb-4">
    <div class="d-flex align-items-center mb-3">
      <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
      <h5 class="ml-3">Sosial Media:</h5>
    </div>
    <div class="">
      <a href="#" class="d-flex align-items-center mb-3">
        <i class="fab fa-facebook mr-2" style="font-size: 2.2rem; color: #3B5998;width: 2.8rem;"></i>
        <h6 class="m-0">Facebook</h6>
      </a>
      <a href="#" class="d-flex align-items-center mb-3">
        <i class="fab fa-instagram mr-2" style="font-size: 2.2rem; color: #F34E55;width: 2.8rem;"></i>
        <h6 class="m-0">Instagram</h6>
      </a>
      <a href="#" class="d-flex align-items-center mb-3">
        <i class="fab fa-youtube mr-2" style="font-size: 2.2rem; color: #FF0000;width: 2.8rem;"></i>
        <h6 class="m-0">Youtube</h6>
      </a>
      <a href="#" class="d-flex align-items-center mb-3">
        <i class="fas fa-globe mr-2" style="font-size: 2.2rem; color: #0084C7;width: 2.8rem;"></i>
        <h6 class="m-0">Website</h6>
      </a>
    </div>
  </div>
</div>
</div>