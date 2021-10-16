<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PPDB - SMK Muhammadiyah 1 Sukoharjo</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('./css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('./css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('./css/globals.css') }}">
</head>

<body>
  @yield('main')

  <!-- Modal -->
  <div class="modal fade" id="modal_kontak" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Kontak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-3">
            <div class="d-flex align-items-center">
              <i class="fab fa-whatsapp mr-3" style="font-size: 2rem; color: #2EB943"></i>
              <h5 class="mb-0 font-weight-medium">0813 2953 6524</h5>
            </div>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <div class="d-flex align-items-center">
              <i class="fas fa-phone mr-3" style="font-size: 1.6rem;"></i>
              <h5 class="mb-0 font-weight-medium">0813 2953 6524</h5>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('./js/jquery-3.5.1.slim.min.js') }}"></script>
  <script src="{{ asset('./js/popper.min.js') }}"></script>
  <script src="{{ asset('./js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('./js/bootstrap-datepicker.min.js') }}"></script>
  <script>
    $('.datepicker').datepicker({
      format: 'dd-mm-yyyy'
    });
  </script>
</body>

</html>