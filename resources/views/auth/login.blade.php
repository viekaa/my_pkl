<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/backend/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/backend/css/styles.css') }}" />
  <title>Login | Modernize</title>
</head>

<body>
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
                <h2 class="mb-1 fs-7 fw-bolder">Welcome to Modernize</h2>
                <p class="mb-7">Your Admin Dashboard</p>

                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">Sign in with email</p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required autofocus>
                  </div>

                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                  </div>

                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" name="remember" id="remember">
                      <label class="form-check-label text-dark fs-3" for="remember">
                        Remember this device
                      </label>
                    </div>
                    <a class="text-primary fw-medium fs-3" href="{{ route('password.request') }}">Forgot Password?</a>
                  </div>

                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>

                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create an account</a>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/backend/libs/simplebar/dist/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/backend/js/theme/app.init.js') }}"></script>
  <script src="{{ asset('assets/backend/js/theme/theme.js') }}"></script>
  <script src="{{ asset('assets/backend/js/theme/app.min.js') }}"></script>
</body>
</html>
