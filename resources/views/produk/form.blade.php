<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
    <style>
      .container {
        display: flex;
        justify-content: flex-end;
      }
      .font {
        font-size: 12px;
      }
    </style>
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
            <div class="card-header bg-primary text-center text-white"><strong>{{ $store }} Data Produk Teh Ginastel</strong></div>
              <div class="card-body">
              <div class="font">
              <form method="POST" action="{{$action}}">
                @csrf
                @if (strtolower($store) == 'ubah')
                    @method('PUT')
                @endif
                <input type="hidden" name="id" value="{{ $produk->id }}" />
                <div class="mb-3">
                  <label for="NamaProduk" class="form-label">Nama Produk :</label>
                  <input type="text" class="form-control font" name="nama" placeholder="Nama Produk" value="{{ $produk->nama }}" /><br>
                    @error('nama')
                    <b>{{ $message }}</b>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="modul" class="form-label">Harga Produk :</label>
                  <input type="text" class="form-control font" name="harga" placeholder="Harga" value="{{ $produk->harga }}" /><br>
                    @error('harga')
                    <b>{{ $message }}</b>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="{{ $store }}" />
                    <a href="{{ url('/produk') }}" class="btn btn-danger">Kembali</a>
                </form>
                </div>
              </div>
        </div>
    </div>
</div>