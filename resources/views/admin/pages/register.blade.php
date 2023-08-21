<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CONNEXION - VOISINAGE ALLAKRO</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h3 class="text-white">INSCRIPTION</h3><br><br>
							<a href="{{ route('webSiteHome') }}" class="btn btn-outline-info text-right">Retour à l'accueil</a>
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="login-form">
                            <form action="{{ route('created') }}" method="POST">
                                @csrf
								<div class="form-group">
                                    <label>NOM</label>
                                    <input type="text" name="nom" value="{{ old('nom') }}" class="au-input au-input--full @error('nom') is-invalid @enderror" placeholder="Entrez votre nom">
                                    @error('nom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="form-group">
                                    <label>PRENOMS</label>
                                    <input type="text" name="prenoms" value="{{ old('prenoms') }}" class="au-input au-input--full @error('prenoms') is-invalid @enderror" placeholder="Entrez vos prénoms">
                                    @error('prenoms')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="form-group">
                                    <label>TELEPHONE</label>
                                    <input type="text" name="telephone" value="{{ old('telephone') }}" class="au-input au-input--full @error('telephone') is-invalid @enderror" placeholder="Entrez votre numéro de téléphone">
                                    @error('telephone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>IDENTIFIANT DE CONNEXION</label>
                                    <input type="text" name="identifiant" value="{{ old('identifiant') }}" class="au-input au-input--full @error('identifiant') is-invalid @enderror" placeholder="Entrez un identifiant de connexion">
                                    @error('identifiant')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" name="password" class="au-input au-input--full @error('password') is-invalid @enderror" placeholder="Entrez un mot de passe (A ne pas oublié...)">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div><br>
                                <button type="submit" name="submit" class="au-btn au-btn--block au-btn--green m-b-20" style="color: #fff; background-color: #63c76a;">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>