<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{ config('app.name') }}</title>
  <!-- Favicon -->
  <link href="{{ asset('assets/template/img/Kota-Madiun.png') }}" rel="icon">
  <link href="{{ asset('assets/template/img/Kota-Madiun.png') }}" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('template/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('template/assets/css/argon.css?v=1.1.0') }}" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="../index.html">
          <!-- <img src="{{ asset('template/assets/img/brand/white.png') }}" alt="brand"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <!-- <img src="{{ asset('template/assets/img/brand/blue.png') }}" alt="brand"> -->
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Youtube">
                <i class="fa fa-youtube"></i>
                <span class="nav-link-inner--text d-lg-none">Youtube</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <!-- <div class="text-muted text-center mb-3"><small>Pencatatan Absensi Rapat</small></div> -->
                <div class="btn-wrapper text-center">
                  <a href="https://madiunkota.go.id/" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img alt="image" src="{{ asset('template/Kota-Madiun.png') }}">
                    </span>
                    <span class="btn-inner--text">JDIH Kota Madiun</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Masukkan Username dan password</small>
                </div>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Username" id="email" type="text" name="email" value="{{ old('email') }}" autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" id="password" name="password" required autocomplete="current-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for="customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <!-- <div class="text-center"> -->
                    <button type="submit" class="btn btn-primary my-4" style="width:48%">Masuk</button>
                    <a href="" class="btn btn-warning my-4" style="width:48%">Kembali</a>
                  <!-- </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2"></h3>
          <h4 class="mb-0 font-weight-light">Pemerintah Kota Madiun</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Twitter">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Facebook">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Instagram">
            <i class="fa fa-instagram"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Youtube">
            <i class="fa fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="{{ asset('template/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/headroom/headroom.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('template/assets/js/argon.js?v=1.1.0') }}"></script>
</body>

</html>