<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .custom-shape-divider-top-1715833911 {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          overflow: hidden;
          line-height: 0;
      }

      .custom-shape-divider-top-1715833911 svg {
          position: relative;
          display: block;
          width: calc(100% + 1.3px);
          height: 295px;
      }

      .custom-shape-divider-top-1715833911 .shape-fill {
          fill: #FFFFFF;
      }
    </style>
  </head>
  <body class="bg-primary">
    <div class="custom-shape-divider-top-1715833911">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
      </svg>
  </div>
    <div
      class="container d-md-flex position-absolute top-50 start-50 translate-middle justify-content-center"
    >
      <div class="card mb-2 w-25">
        <div class="card-body shadow-lg">
          <h2 class="card-title pt-2 pb-2 fw-bold text-center">Register</h2>
          <hr />
          <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama: </label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" />
              @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email: </label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" />
              @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password: </label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" />
              @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Confirm Password: </label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
              @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
            <p class="text-center mt-2">Sudah punya akun?<span><a href="{{ url('/login') }}">Login</a></span></p>
          </form>
        </div>
      </div>
    </div>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    ></script>
  </body>
</html>