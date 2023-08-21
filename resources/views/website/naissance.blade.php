<!doctype html>
<html lang="fr" data-bs-theme="all">
  <head>
    <script src="{{ asset('front/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Enregistrement d'une naissance</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"> 
    
    <link href="{{ asset('front/CSS/formulaire.css') }} " rel="stylesheet">
  </head>
  <body class="d-block align-items-center bg-body-tertiary">
    <form action="{{ route('postNaissance') }}" method="post" enctype="multipart/form-data">
		@csrf

		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@endif

        <h1>Enregistrer une nouvelle naissance</h1>

		<a href="{{ route('webSiteHome') }}" class="btn btn-outline-info text-right">Retour à l'accueil</a>
    
        <section class="personal-info">
          <h2>Informations sur L'enfant</h2>
          <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control @error('nom') is-invalid @enderror">
			@error('nom')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div>
            <label for="nom">Prénoms:</label>
            <input type="text" id="nom" name="prenoms" class="form-control @error('prenoms') is-invalid @enderror">
			@error('prenoms')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div>
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror">
			@error('date_naissance')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div>
            <label for="Mode_de_naissance">Mode de naissance:</label>
            <input type="text" id="nom" name="mode_naissance" class="form-control @error('mode_naissance') is-invalid @enderror">
			@error('mode_naissance')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div class="sexe">
            <label>Sexe:</label>
            <label for="sexe_homme">M</label>
            <input type="radio" id="sexe_homme" name="genre" value="M" class="form-check-input">
            <label for="sexe_femme">F</label>
            <input type="radio" id="sexe_femme" name="genre" value="F" class="form-check-input">
          </div>
        </section>
    
        <section class="education">
          <h2>Information sur les parents</h2>
          
          <div>
            <label for="nom">Nom et prénoms du père:</label>
            <input type="text" name="noms_pere" class="form-control @error('noms_pere') is-invalid @enderror">
			@error('noms_pere')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div>
            <label for="nom">Nom et prénoms de la mère:</label>
            <input type="text" name="noms_mere" class="form-control @error('noms_mere') is-invalid @enderror">
			@error('noms_mere')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
          <div>
            <label for="etablissement_scolaire">Lieu d'habitation de la famille:</label>
            <input type="text"  name="lieu_habitation" class="form-control @error('lieu_habitation') is-invalid @enderror" placeholder="A défaut lieu d'habitation de la mère">
			@error('lieu_habitation')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
          </div>
        </section>
        <!-- Bouton de soumission -->
		
        <div class="submit-button">
          <input type="submit" value="Soumettre">
        </div>
    </form>
    <div class="container">
      <footer class="py-3 my-4">
        <p class="text-center text-body-secondary">&copy; 2023 UVCI (Tout droit reservés), GROUPE1-BD-DAS - RAJ22-23</p>
      </footer>
    </div>
    <script src="{{ asset('front/JS/bootstrap.bundle.min.js') }} "></script>
  </body>
</html>
