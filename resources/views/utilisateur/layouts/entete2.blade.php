<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mambote.Shop</title>
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
          <a href="{{route('home_e-commerce')}}" class="logo d-flex align-items-center">
            <img src="{{asset('img/logo.png')}}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-sm-6 ">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input class="" type="text" name="query" placeholder="Rechercher" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
          </div>
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{asset('img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{Session('users')}}</span>
              </a><!-- End Profile Iamge Icon -->
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{Session('users')}}</h6>
                  <span>{{Session('users')}}</span>
                </li>
                @if (Session('users') == true)
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('formulaire_poste')}}">
                      <i class="bi bi-person"></i>
                      <span>Poster un article</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('logout_users')}}">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Déconnexion</span>
                    </a>
                  </li>
                @else
                <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('login_users')}}">
                      <i class="bi bi-person"></i>
                      <span>Se connecter</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('register')}}">
                      <i class="bi bi-people"></i>
                      <span>S'enregister</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                @endif
              </ul>
            </li>
          </ul>
        </nav>
      </header>


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{asset('img/news-2.jpg')}}" height="700px" width="100%" alt="">


            <div class="container">
                <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
            </div>
            <div class="carousel-item">

            <img src="{{asset('img/news-1.jpg')}}" height="700px" width="100%" alt="">

            <div class="container">
                <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/news-1.jpg')}}" height="700px" width="100%" alt="">

            <div class="container">
                <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>


    @yield('content')
    <div class="b-example-divider">
        <div class="container-fluid">
            <footer class="py-3 my-4 ">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="{{route('home_e-commerce')}}" class="nav-link px-2 text-muted">Accueil</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Plus d'info</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Apropos</a></li>
                </ul>
                <p class="text-center text-muted">Bestech consult &copy; 2022</p>
            </footer>
        </div>
    </div>

<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>


