@extends('admin.layouts.master')

@section('title', 'Modification centre de santé')

@section('content')

	<div class="row" style="justify-content: center;">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<strong>Modification d'un centre de santé</strong>
				</div>
				
				<form action="{{ route('updateCentre', $edit->id) }}" method="POST" class="form-horizontal">
					<div class="card-body card-block">
						@csrf
						@method('PUT')
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nom de la pharmacie</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="nom" value="{{ $edit->nomCdsan }}" placeholder="nom de la pharmacie" class="form-control @error('nom') is-invalid @enderror">
								@error('nom')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Localisation</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="localisation" value="{{ $edit->locCdsan }}" placeholder="Sa localisation" class="form-control @error('localisation') is-invalid @enderror">
								@error('localisation')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
                        <div class="row form-group">
							<div class="col col-md-3">
								<label for="textarea-input" class=" form-control-label">Services</label>
							</div>
							<div class="col-12 col-md-9">
								<textarea name="service" id="textarea-input" rows="9" placeholder="Ajoutez les ervices..." class="form-control">{{ $edit->servCdsan }}</textarea>
								@error('service')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
					
					</div>
					<div class="card-footer">
						<a href="{{ route('listCentre') }}" class="btn btn-danger btn-sm text-white">
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