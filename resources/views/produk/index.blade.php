@extends('auth.dashboard')
@section('content')
<div class="container">
    <div class="col-md-12 mt-3 shadow-lg rounded-4 p-3">
        <div class="parent">
          <a href="{{ url('produk/create') }}" type="button" class="btn btn-primary btn-sm"><strong>+ Produk</strong></a>
        </div>
        <div class="card mt-3">
            <div class="card-header bg-primary text-center text-white"><strong>Daftar Produk Teh Ginastel</strong></div>
              <div class="card-body">
                <div class="font">
                <table class="table responsive-2">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                @endphp
                @foreach ($produk as $p)
                    <tr>
                        <td>{{ $i }}</td>
                        <td hidden>{{ $p->id }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>
                            <a href="produk/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="produk/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
                  </tbody>
                </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection