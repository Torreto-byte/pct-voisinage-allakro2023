<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de proposition de service</title>
  <link rel="stylesheet" href="{{ asset('front/CSS/formulaire.css') }}">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body><br><br><br>
  <form action="{{ route('postFormulaire') }}" method="post" enctype="multipart/form-data">

	@csrf

	@if(session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@endif

    <h1>Formulaire de proposition de service</h1>

	<a href="{{ route('webSiteHome') }}" class="btn btn-outline-info text-right">Retour à l'accueil</a><br><br>

    <section class="personal-info">
      <h2>Informations personnelles</h2><br><br>
      <div>
        <label for="nom">Nom & Prénoms :</label>
        <input type="text" id="nom" name="noms" class="form-control @error('noms') is-invalid @enderror" required>
		@error('noms')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
      </div>
      <div>
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" required>
		@error('telephone')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
      </div>
      <div>
        <label for="adresse">Service offert :</label>
        <textarea id="adresse" name="services" class="form-control @error('services') is-invalid @enderror"></textarea>
		@error('services')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
      </div>
	  <div>
        <label for="adresse">Compétences :</label>
        <textarea id="adresse" name="competences" class="form-control @error('competences') is-invalid @enderror"></textarea>
		@error('competences')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
      </div>
      <div>
        <label for="photo">Photo (Facultatif) :</label>
        <input type="file" id="photo" name="photo" class="form-control">
      </div>
	 <div>
        <label for="adresse">Message :</label>
        <textarea id="adresse" name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
		@error('message')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
      </div>
    </section>

    <!-- Bouton de soumission -->
    <div class="submit-button">
      <input type="submit" value="Enregister mon service à 100 FCFA">
    </div>
  </form>
	<div class="container">
      <footer class="py-3 my-4">
        <p class="text-center text-body-secondary">&copy; 2023 UVCI (Tout droit reservés), GROUPE1-BD-DAS - RAJ22-23</p>
      </footer>
    </div>
</body>
</html>
