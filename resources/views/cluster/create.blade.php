<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TP EXAMEN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    {{-- <link href="assets/img/logo.jpg" rel="icon"> --}}
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Google Fonts -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap') }}"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assetsAdmin/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/vendor/login/index.css') }}" rel="stylesheet">
</head>

<body>
    {{-- nav bar Debut--}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="height: 70px">
  <div class="container-fluid">
    <a class="navbar-brand fs-5" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Creations
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Afficharges
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    {{-- nav bar fin --}}
    {{-- Formulaire debut --}}
    <div class="container ">
        <section class="section register  d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <!--Debut titre-->
                        <div class="d-flex justify-content-center py-4">
                            <span class="d-none d-lg-block align-items-center h3"> Nouveau Cluster</span>
                        </div>
                        <!--Fin titre-->

                        <!---->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="{{ route('clusters.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="" class="form-label">Filière</label>
                                                <select class="form-select form-select-lg mb-3" name="filiere"
                                                    aria-label=".form-select-lg example " required>
                                                    <option selected>Selectionner une filiere</option>
                                                    @foreach ($filieres as $id => $filiere)
                                                        <option value="{{ $id }}">{{ $filiere }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Departement</label>
                                                <select class="form-select form-select-lg mb-3" name="departement"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Selectionner une departement</option>
                                                    @foreach ($departements as $departement)
                                                        <option value="{{ $departement->id }}">{{ $departement->nom }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Commune</label>
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="commune">
                                                    <option selected>Selectionner une commune</option>
                                                    @foreach ($communes as $commune)
                                                        <option value="{{ $commune->id }}">{{ $commune->nom }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Arrondissement</label>
                                                <select class="form-select form-select-lg mb-3" name="arrondissement"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Selectionner un arrondissement</option>
                                                    @foreach ($arrondissements as $arrondissement)
                                                        <option value="{{ $arrondissement->id }}">
                                                            {{ $arrondissement->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Village</label>
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="village">
                                                    <option selected>Selectionner un village</option>
                                                    @foreach ($villages as $village)
                                                        <option value="{{ $village->id }}">{{ $village->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="">Nom cluster</label>
                                            <div class="input-group input-group-lg mb-3">
                                                <input type="text"
                                                    class="form-control"aria-label="Sizing example input" name="cluster"
                                                    aria-describedby="inputGroup-sizing-lg"required>
                                            </div>
                                        </div>

                                        <div class="row row-cols-auto mt-4">
                                            <div class="col">
                                                <input class="btn btn-primary" type="submit"></input>
                                            </div>
                                            <div class="col">
                                                <input class="btn btn-warning" value="Annuler" type="reset"></input>
                                            </div>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
    </div>
    </section>
    </div>
    {{-- Formulaire fin --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
