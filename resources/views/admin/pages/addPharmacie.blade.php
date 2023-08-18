@extends('admin.layouts.master')

@section('title', 'Enregistrement pharmacie')

@section('content')

	<div class="row" style="justify-content: center;">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<strong>Enregistrement d'une pharmacie</strong>
				</div>
				
				<form action="{{ route('postPharmacie') }}" method="POST" class="form-horizontal">
					<div class="card-body card-block">
						@csrf

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nom de la pharmacie</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="nom" placeholder="nom de la pharmacie" class="form-control @error('nom') is-invalid @enderror">
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
                              <input type="text" id="email-input" name="localisation" placeholder="Sa localisation" class="form-control @error('localisation') is-invalid @enderror">
								@error('localisation')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                              <label class=" form-control-label">En garde ?</label>
                            </div>
                            <div class="col col-md-9">
                              	<div class="form-check">
									<div class="radio">
									<label for="radio1" class="form-check-label ">
										<input type="radio" id="radio1" name="garde" value="OUI" class="form-check-input @error('garde') is-invalid @enderror">OUI
									</label>
									</div>
                                  	<div class="radio">
										<label for="radio2" class="form-check-label ">
										<input type="radio" id="radio2" name="garde" value="NON" class="form-check-input @error('garde') is-invalid @enderror">NON
										</label>
                                  	</div>
									@error('garde')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                              	</div>
                            </div>
                        </div>
					
					</div>
					<div class="card-footer">
						<a href="{{ route('listPharmacie') }}" class="btn btn-danger btn-sm text-white">
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