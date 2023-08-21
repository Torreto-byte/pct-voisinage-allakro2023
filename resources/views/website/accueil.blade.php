<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{ asset('front/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Accueil</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="{{ asset('front/CSS/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/CSS/headers.css') }}" rel="stylesheet">
  </head>
  <body>
    <main>
      <header>
        <div class="py-2 bg-body-tertiary border-bottom">
          <div class="container d-flex flex-wrap align-items-center">
            <div class="nav me-auto">
              <a href="{{ route('webSiteHome') }}" class="nav-link link-body-emphasis px-2"><img src="{{  asset('front/IMG/logo2.png')}}" alt="Logo UVCI" srcset=""></a>
            </div>
            <ul class="nav">
              <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Aide</a></li>
              
                @if ( Session::get('user_id') )
                  <li class="nav-item"><a href="{{ route('logout') }}" type="button" class="btn btn-danger px-4 me-sm-3 fw-bold">Déconnexion</a></li>
                @else
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-body-emphasis px-2">Connexion</a></li>
                  <li class="nav-item"><a href="{{ route('register') }}" class="nav-link link-body-emphasis px-2">Inscription</a></li>
                @endif
            </ul>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg" aria-label="Tenth navbar example">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
              <ul class="navbar-nav">
                <li>
                  <a class="nav-link" aria-current="page" href="{{ route('webSiteHome') }}">ACCUEIL</a>
                </li>
                {{-- <li>
                  <a class="nav-link" aria-current="page" href="#">HABITANTS</a>
                </li> --}}
                <li>
                  <a class="nav-link" href="{{ route('websiteListPharmacie') }}">PHARMACIE</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('websiteListCentre') }}">CENTRE DE SANTE</a>
                </li>
                <li>
                  <a class="nav-link" aria-current="page" href="{{ route('websiteListProjet') }}">PROJET</a>
                </li>
                @if (Session::get('user_id'))
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">AJOUT</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('websiteNaissance') }}">NAISSANCE</a></li>
                      <li><a class="dropdown-item" href="{{ route('websiteDeces') }}">DECES</a></li>
                      <li><a class="dropdown-item" href="{{ route('websiteAmenagement') }}">AMENAGEMENT</a></li>
                      <li><a class="dropdown-item" href="{{ route('websiteDemenagement') }}">DEMENAGEMENT</a></li>
                    </ul>
                  </li>
                @endif
                
              </ul>
            </div>
          </div>
        </nav>

      </header>
      <div class="text-secondary px-4 py-5 text-center" style="background-image: url('/front/IMG/travailleurs-campagne-terrain.jpg');">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white">Bienvenue<br></h1>
          <h2 class="fw-bold text-white">sur le portail de gestion <br>de la population du village d'ALLAKRO</h2>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4 text-white">sur le portail de gestion <br>de la population du village d'ALLAKRO</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-success btn-lg px-4 me-sm-3 fw-bold">En savoir plus</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

          {{-- <a href="sign-in.html">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('/front/IMG/coup-moyen-femmes-posant-au-marche.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Habitants</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small class="pt-5" >En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a> --}}

          <a href="{{ route('websiteListPharmacie') }}">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pharmacies</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small class="pt-5" >En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          
          <a href="{{ route('websiteListCentre') }}">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('/front/IMG/Hospital\ building\ exterior\ modern\ clinic\ view.jpeg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Centres de santé</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small>En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a>

          {{-- <a href="maladie.html">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('IMG/Sick\ african-american\ man\ drinking.jpeg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Maladies</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small class="pt-5" >En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a> --}}
          
          <a href="{{ route('websiteListProjet') }}">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Projets</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small class="pt-5" >En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a>
          
          <a href="{{ route('websiteFormulaire') }}">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url('');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Proposition de service</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <small>En savoir plus</small>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="container">
          <p class="text-center text-body-secondary">&copy; 2023 UVCI (Tout droit reservés), GROUPE1-BD-DAS - RAJ22-23</p>
        </footer>
      </div>

    </main>
    <script src="{{ asset('front/JS/bootstrap.bundle.min.js')}} "></script>
  </body>
</html>
