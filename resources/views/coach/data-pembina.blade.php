<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="{{ asset('tasanesiaform.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>data pembina</title>
    <style>
      body {
       font-family: 'Poppins', sans-serif;
       background: #C4C4C4;
     }
 
     .card {
       padding:0px;
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
    <section>
      <div class="container">
        <div class="row">
          <div
            class="card"
            style="background-color: white; margin-top: 85px; border: none"
          >
            <div
              class="card-body text-center"
              style="background-color: #315343"
            >
              <h1 style="margin-top: 0px">Data Pembina</h1>
            </div>
            <div class="card-body">
              <div class="row" style="padding: 35px">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>ID institusi :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Posisi organisasi:</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->position_in_org}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Nama :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Nama Projek :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->project_name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Gelar :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->degree}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Posisi Projek :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->position_in_project}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Sekolah :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->school}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Skill :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->skill}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Fakultas :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->faculty}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Catatan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->notes}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Jurusan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->major}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>is verified :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckChecked"
                      checked
                    />
                    <label class="form-check-label" for="flexCheckChecked">
                      No
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Organisasi :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$coach->organization}}</h5>
                </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="text-align: end;">
                          <button
                            class="text-center"
                            style="
                              width: 150px;
                              margin-top: 200px;
                              margin-left: auto;
                              margin-right: auto;
                              border-radius: 10px;
                              background-color: #315343 ;
                              color: white;
                              font-weight: bolder;
                              text-align: end;
                            "
                          >
                            Edit
                          </button>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <button
                              class="text-center"
                              style="
                                width: 150px;
                                margin-top: 200px;
                                margin-left: auto;
                                margin-right: 20px;
                                border-radius: 10px;
                                background-color: white;
                                color: #315343;
                                font-weight: bolder;
                              "
                            >
                              Kembali
                            </button>
                            </div>

                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        @2022 Tasanesia. All Rights Reserved
      </div>
    </section>

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
