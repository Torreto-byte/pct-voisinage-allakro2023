<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{ asset('front/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Liste des projets</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="{{ asset('front/CSS/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="CSS/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </symbol>
      <symbol id="search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </symbol>
    </svg>

    <header class="navbar sticky-top bg-success flex-md-nowrap p-0 shadow" data-bs-theme="dark">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Village d'Allakro</a>

      <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
          <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
            <svg class="bi"><use xlink:href="#search"/></svg>
          </button>
        </li>
        <li class="nav-item text-nowrap">
          <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="bi"><use xlink:href="#list"/></svg>
          </button>
        </li>
      </ul>

      <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
          <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="sidebarMenuLabel">Village d'ALLAKRO</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 text-dark" href="{{ route('webSiteHome') }}">Accueil</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 text-dark" href="maladie.html">Maladies</a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 text-dark" href="{{ route('websiteListCentre') }}">Centre de santé</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 text-dark" href="{{ route('websiteListPharmacie') }}">Pharmacies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 text-dark" href="{{ route('websiteListProjet') }}">Projets</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm" style="background-color: blueviolet;">
            <img class="me-3" src="{{ asset('front/IMG/logo_uvci.png') }}" alt="" width="48" height="38">
            <div class="lh-1">
              <h1 class="h6 mb-0 text-white lh-1">LISTE DES PROJETS</h1>
            </div>
          </div>

          <div class="mt-5 mb-5"></div>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
					<th scope="col">NOM DU PROJET</th>
					<th scope="col">AUTEUR DU PROJET</th>
					<th scope="col">DATE DU PROJET</th>
                </tr>
              </thead>
              <tbody>
				@foreach ($items as $item)
					<tr>
						<td>{{ $item->nomPrj }}</td>
						<td>{{ $item->autPrj }}</td>
						<td>{{ date('d-m-Y', strtotime($item->datePrj)) }}</td>
					</tr>
				@endforeach
              </tbody>
            </table>
          </div>

          <div class="container">
            <footer class="py-3 my-4">
              <p class="text-center text-body-secondary">&copy; 2023 UVCI (Tout droit reservés), GROUPE1-BD-DAS - RAJ22-23</p>
            </footer>
          </div>
        </main>
      </div>
    </div>
    <script src="{{ asset('front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js">
    </script><script src="{{ asset('front/JS/dashboard.js') }}"></script></body>
  </body>
</html>