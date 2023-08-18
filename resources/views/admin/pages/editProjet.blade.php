@extends('admin.layouts.master')

@section('title', 'Modification projet')

@section('content')

	<div class="row" style="justify-content: center;">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<strong>Modification d'un projet</strong>
				</div>
				
				<form action="{{ route('updateProjet', $edit->id) }}" method="POST" class="form-horizontal">
					<div class="card-body card-block">
						@csrf
						@method('PUT')

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nom du projet</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="nom" placeholder="Nom du projet" value="{{ $edit->nomPrj }}" class="form-control @error('nom') is-invalid @enderror">
								@error('nom')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Auteur du projet</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="auteur" value="{{ $edit->autPrj }}" placeholder="Auteur du projet" class="form-control @error('auteur') is-invalid @enderror">
								@error('auteur')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Date du projet</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="date" id="text-input" name="date_projet" value="{{ $edit->datePrj }}" placeholder="Date du projet" class="form-control @error('date_projet') is-invalid @enderror">
								@error('date_projet')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>
					
					</div>
					<div class="card-footer">
						<a href="{{ route('listProjet') }}" class="btn btn-danger btn-sm text-white">
							<i class="fa fa-ban"></i> Annuler
						</a>

						<button type="submit" class="btn btn-primary btn-sm" style="margin-left: 20px;">
							<i class="fa fa-dot-circle-o"></i> Enregistrer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection