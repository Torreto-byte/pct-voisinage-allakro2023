@extends('admin.layouts.master')

@section('title', 'Modification maladie')

@section('content')

	<div class="row" style="justify-content: center;">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<strong>Modification d'une maladie</strong>
				</div>
				
				<form action="{{ route('updateMaladie', $edit->id) }}" method="POST" class="form-horizontal">
					<div class="card-body card-block">

						@csrf
						@method('PUT')

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nom de la maladie</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="libelle" value="{{ $edit->libMal }}" placeholder="nom de la maladie" class="form-control @error('libelle') is-invalid @enderror">
								@error('libelle')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>
					
					</div>
					<div class="card-footer">
						<a href="{{ route('listMaladie') }}" class="btn btn-danger btn-sm text-white">
							<i class="fa fa-ban"></i> Annuler
						</a>

						<button type="submit" class="btn btn-primary btn-sm" style="margin-left: 20px;">
							<i class="fa fa-dot-circle-o"></i> Modifier
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection