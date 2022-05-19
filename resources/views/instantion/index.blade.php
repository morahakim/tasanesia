@extends('layouts.default')

    <title>List Institusi </title>
    <style>
      @media (min-width: 575.98px) { 
        .navbar .navbar-expand-lg .navbar-light .bg-light{
          max-width: 100%;
        }
       }
    </style>
  </head>
  <body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-image" href="#"
              ><img
                src="{{ asset('img/gambar.jpeg') }}"
                alt=""
                style="width: 150px; margin-left: 10px"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >Dashboard</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Manajemen Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Manajemen Kategori</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Manajemen order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Manajemen Berita</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </section>
    <div class="container-fluid">
    <div class="text-center">
      <h1 style="color: #315343; font-weight: bold">List Institusi</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-2 col-sm-3 col-2" style="margin-bottom: 20px">
            <a href="{{ route('instantion.create') }}"><button type="button" class="btn"  style="background-color: #315343;color:white;">Tambah</button></a>
        </div>
          <div class="col-lg-3 col-md-2 col-sm-3 col-2 mx-3" style="margin-bottom: 20px">
            <div class="btn-group">
            <button type="button" style="background-color: #315343;color:white; border-radius: 5px;" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Lokasi
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 offset-2 col-md-2 col-sm-3 col-2" style="margin-bottom: 20px">
          <button type="button" class="btn" style="background-color: #315343;color:white; border-radius: 5px;">Search<i class="fas fa-search mx-1"></i></button>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <table class="table table-bordered" style="border: 1px solid black">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Kepala perusahaan</th>
          <th scope="col">No. Handphone</th>
          <th scope="col">Address</th>
          <th scope="col">Plafond</th>
        </tr>
        @foreach($data_instantion as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->head_of_company}}</td>
        <td><a href="/instantion/{{$data->id}}/detail">http\tasanesia.com\{{$data->name}}</a></td>
        <td>
          <form action="{{ route('instantion.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                DELETE
            </button>
        </form>
        <form action="{{ route('instantion.edit', $data->id) }}" method="POST">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-sm btn-success mt-2">
                UPDATE
            </button>
        </form>
          </td> 
        </tr>
        @endforeach
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>






{{-- @extends('layouts.default')

@section('title', 'Instantion')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session ('sukses')}}
            </div>
            @endif
              <div class="row justify-content-between">
                  <div class="col-3">
                       <h1 style="color:green">Data Instansi</h1>
                  </div>
                  <div class="col-4">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('instantion.create') }}">Tambah Instansi</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kepala Perusahaan</th>
                    <th>No. Handphone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Platfond</th>
                    <th>Source</th>
                  </tr>
                  @foreach($data_instantion as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->head_of_company }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->address }} </td>
                    <td>{{ $data->plafond }}</td>
                    <td>{{ $data->source }} </td>
                    <td>
                        <form action="{{ route('instantion.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('instantion.edit', $data->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-sm btn-success mt-2">
                                UPDATE
                            </button>
                        </form>
                    </td>
                  </tr> 
                  @endforeach
              </table>
              </div>
          </div>
        </div>
    </div>
</div>

@endsection --}}