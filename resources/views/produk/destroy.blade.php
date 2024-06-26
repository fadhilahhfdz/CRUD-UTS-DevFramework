<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
</head>
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
      {{-- <span class="navbar-text">
        <a href="" type="button" class="btn btn-danger btn-sm text-white"><strong>LOGOUT</strong></a>
      </span> --}}
    </div>
  </div>
</nav>
<div class="container">
    <div class="col-md-12 mt-3 shadow-lg rounded-4 p-3">
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white"><strong>Apakah Anda akan menghapus data ini?</strong></div>
              <div class="card-body">
                <div class="font">
                @isset($produk)
                <table class="table responsive-2">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->harga }}</td>
                    </tr>
                  </tbody>
                </table>
                @endisset
                <form method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-primary" value="Hapus" />&nbsp;
                    <a href="{{ url('/produk') }}" class="btn btn-danger">Kembali</a>
                    {{-- <div class="send_bt">
                        <a href="{{ url('/produk') }}">Kembali</a>
                    </div> --}}
                </form>
                </div>
              </div>
        </div>
    </div>
</div>