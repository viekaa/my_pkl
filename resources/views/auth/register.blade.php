<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/backend/images/logos/favicon.png') }}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/styles.css') }}" />

  <title>Register | Modernize Bootstrap Admin</title>
</head>

<body>
  <div class="preloader">
    <img src="{{ asset('assets/backend/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>

  <div id="main-wrapper" class="auth-customizer-none">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-xl-7 col-xxl-8">
            <a href="{{ url('/') }}" class="text-nowrap logo-img d-block px-4 py-9 w-100">
              <img src="{{ asset('assets/backend/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
              <img src="{{ asset('assets/backend/images/logos/light-logo.svg') }}" class="light-logo" alt="Logo-light" />
            </a>
            <div class="d-none d-xl-flex align-items-center justify-content-center h-n80">
              <img src="{{ asset('assets/backend/images/backgrounds/login-security.svg') }}" alt="modernize-img" class="img-fluid" width="500">
            </div>
          </div>
          <div class="col-xl-5 col-xxl-4">
            <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
              <div class="auth-max-width col-sm-8 col-md-6 col-xl-7 px-4">
                <h2 class="mb-1 fs-7 fw-bolder">Create Account</h2>
                <p class="mb-7">Register to access dashboard</p>
                
                <div class="row">
                  <div class="col-6 mb-2 mb-sm-0">
                    <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="#">
                      <img src="{{ asset('assets/backend/images/svgs/google-icon.svg') }}" alt="google" class="img-fluid me-2" width="18" height="18">
                      <span class="flex-shrink-0">with Google</span>
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="#">
                      <img src="{{ asset('assets/backend/images/svgs/facebook-icon.svg') }}" alt="facebook" class="img-fluid me-2" width="18" height="18">
                      <span class="flex-shrink-0">with FB</span>
                    </a>
                  </div>
                </div>

                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">or sign up with</p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>

                <!-- FORM REGISTER -->
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                  </div>

                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</button>

                  <div class="d-flex align-items-center">
                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign In</a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
      }
    </script>

    <script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/backend/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/backend/js/theme/app.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  </div>
</body>

</html>
