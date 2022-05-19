<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="/tasanesiaform.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>List Produk</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-image" href="#"
            ><img
              src="permata desa indonesia logo horisontal (1).png"
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
          <h1 style="color: #315343; font-weight: bold">List Produk</h1>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-3 col-2" style="margin-bottom: 20px">
              <button type="button" class="btn" style="background-color: #315343;color:white; border-radius: 5px;">Tambah</button>
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
          <th scope="col">Gambar produk</th>
          <th scope="col">Nama produk</th>
          <th scope="col">Harga produk</th>
          <th scope="col">Jumlah produk</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status produk</th>
        </tr>
        @foreach ($product as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ $data->images }}" alt=""></td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->quantity }}</td>
            <td><a>{{ $data->notes }}</a></td>
            <td>{{ $data->status }}</td>
            <td>
                  <button type="button" class="btn btn-danger mx-2">Hapus</button>
                  <button type="button" class="btn" style="background-color: #315343;color:white; border-radius: 5px;">Edit</button>
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
