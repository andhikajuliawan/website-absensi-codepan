<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Absensi Codepan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
</head>

<body class="body">
    <div class="container-fluid full-home"
        style="
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
      ">
        <div class="container pt-4">
            <div class="row justify-content-between">
                <div class="col-3">
                    <a class="navbar-brand active" href="#">
                        <img src="../assets/img/logo.png" style="width: 220px" />
                    </a>
                </div>

                <div class="col-3 text-end">
                    <a href="{{ route('dashboard') }}" role="button"
                        class="btn btn-outline btn-md rounded-pill px-4 btn-login">Login</a>
                </div>
            </div>
        </div>
        <!-- Navabar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark pt-4">
        <div class="container">
          <a class="navbar-brand active" href="#">
            <img src="asset-home/image/logo.png" style="width: 220px" />
          </a>
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
                <a
                  class="nav-link"
                  aria-current="page"
                  href="#"
                  style="color: #fff"
                  >Our Product</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff">About Us</a>
              </li>
            </ul>
            <div class="d-flex">
              <ul
                class="navbar-nav me-auto mb-2 mb-lg-0"
                style="align-items: center"
              >
                <li class="nav-item">
                  <a href="screens/register.html">
                    <button
                      type="button"
                      class="btn btn-outline btn-md rounded-pill px-4"
                      style="color: white; background-color: #3eaee2"
                    >
                      Login
                    </button></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav> -->

        <!-- Container satu-->
        <div class="container">
            <div class="row justify-content-between" style="height: 70vh; margin-top: 90px">
                <div class="col-md-5 order-md-2 text-center logo mb-5">
                    <img src="../assets/img/mockup-phone.png" style="width: 50%" />
                </div>
                <div class="col-md-6 order-md-1 flex-column align-self-center">
                    <h1 class="fw-bold text-light title-1">
                        Selamat Datang di Website Absensi Codepan Surabaya
                    </h1>
                    <p class="text-light fs-6 my-4" style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                        lobortis blandit leo, sit amet rutrum lacus auctor quis. Etiam vel
                        venenatis augue. Morbi porta sodales dui, non convallis ante
                        sodales ac. Morbi porttitor auctor libero at consequat. Ut quis
                        risus ornare, cursus sem a, vehicula erat. Duis ut est posuere,
                        semper ex ac, finibus magna. Vestibulum eu sagittis purus, non
                        aliquam quam.
                    </p>
                    <!-- <img
              class="download"
              src="asset-home/image/play-store-logo.png"
              style="width: 25%"
            /> -->
                    <div class="container-download">
                        <a role="button" class="btn rounded-pill px-4 btn-download"
                            href="{{ route('downloadmobiles.downloadMobile') }}">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
