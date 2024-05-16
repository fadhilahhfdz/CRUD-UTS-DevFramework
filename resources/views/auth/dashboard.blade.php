<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
          <a class="navbar-brand text-white" href="#"><strong>Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Dashboard</strong></a>
              </li>
            </ul>
            <li class="nav-item mt-3" style="list-style-type: none">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                    <button type="submit" class="btn btn-danger btn-sm text-white"><strong>LOGOUT</strong></button>
              </form>
            </li>
          </div>
        </div>
      </nav>
      
<div class="container d-flex justify-content-center">
    <div class="mt-5 w-50">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @else
                            <div class="alert alert-success">
                                You are logged in!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@yield('content')


<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"
></script>