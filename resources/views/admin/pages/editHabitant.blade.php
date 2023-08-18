@extends('admin.layouts.master')

@section('title', 'Modification habitant')

@section('content')

	<div class="row" style="justify-content: center;">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-header">
					<strong>Modification d'un habitant</strong>
				</div>
				
				<form action="{{ route('updateHabitant', $edit->id) }}" method="POST" class="form-horizontal">
					<div class="card-body card-block">

						@csrf
						@method('PUT')
						
						<h3 class="text-center title-2">Informations Personnelles </h3><br>

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nom</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="nom" value="{{ $edit->nomHabt }}" placeholder="Nom de l'habitant"  class="form-control @error('nom') is-invalid @enderror">
								@error('nom')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Prénoms</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="prenoms" value="{{ $edit->prenomHabt }}" placeholder="Prénoms de l'habitant" class="form-control @error('prenoms') is-invalid @enderror">
								@error('prenoms')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Contact</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="text" id="text-input" name="contact" value="{{ $edit->contactHabt }}" placeholder="Contact de l'habitant" class="form-control @error('contact') is-invalid @enderror">
								@error('contact')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label class=" form-control-label">Genre</label>
                            </div>
                            <div class="col col-md-9">
                              	<div class="form-check">
									<div class="radio">
									<label for="radio1" class="form-check-label ">
										<input type="radio" id="radio1" name="genre" value="MAXCULIN" @php echo ( $edit->sexeHabt=='MAXCULIN')?'checked':''  @endphp class="form-check-input @error('genre') is-invalid @enderror">MAXCULIN
									</label>
									</div>
                                  	<div class="radio">
										<label for="radio2" class="form-check-label ">
										<input type="radio" id="radio2" name="genre" value="FEMININ" @php echo ( $edit->sexeHabt=='FEMININ')?'checked':''  @endphp class="form-check-input @error('genre') is-invalid @enderror">FEMININ
										</label>
                                  	</div>
									@error('genre')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                              	</div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Fonction</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="fonction" value="{{ $edit->fonctionHabt }}" placeholder="Fonction" class="form-control @error('fonction') is-invalid @enderror">
								@error('fonction')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Date de naissance</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="date" id="email-input" name="date_naissance" value="{{ $edit->date_naissanceHabt }}" placeholder="Date de naissance" class="form-control @error('date_naissance') is-invalid @enderror">
								@error('date_naissance')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Lieu d'habitation</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="lieu_habitation" value="{{ $edit->lieu_habitation }}" placeholder="Lieu d'habitation" class="form-control @error('lieu_habitation') is-invalid @enderror">
								@error('lieu_habitation')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>

						<h3 class="text-center title-2">Informations Complémentaires </h3><br>

						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Mode de naissance</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="mode_naissance" value="{{ $edit->mode_naissanceHabt }}" placeholder="Mode de naissance" class="form-control @error('mode_naissance') is-invalid @enderror">
								@error('mode_naissance')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Nom & Prénoms père</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="noms_pere" value="{{ $edit->nom_prenomPere }}" placeholder="Nom & Prénoms père" class="form-control @error('noms_pere') is-invalid @enderror">
								@error('noms_pere')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Nom & Prénoms mère</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="noms_mere" value="{{ $edit->nom_prenomMere }}" placeholder="Nom & Prénoms mère" class="form-control @error('noms_mere') is-invalid @enderror">
								@error('noms_mere')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>

						<h3 class="text-center title-2">Décès</h3><br>

						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Date du décès</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="date" id="email-input" name="date_deces" value="{{ $edit->date_decesHabt }}" placeholder="Date du décès" class="form-control @error('date_deces') is-invalid @enderror">
								@error('date_deces')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Mode décès</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="mode_deces" value="{{ $edit->mode_decesHabt }}" placeholder="Mode décès" class="form-control @error('mode_deces') is-invalid @enderror">
								@error('mode_deces')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Raison du décès</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="raison_deces" value="{{ $edit->raison_deces }}" placeholder="Raison du décès" class="form-control @error('raison_deces') is-invalid @enderror">
								@error('raison_deces')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Personne référent</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="personne_referent" value="{{ $edit->nom_prenomReferent }}" placeholder="Personne référent" class="form-control @error('personne_referent') is-invalid @enderror">
								@error('personne_referent')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>

						<h3 class="text-center title-2">Aménagement</h3><br>

						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Provenance</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="provenance" value="{{ $edit->provenance }}" placeholder="Provenance" class="form-control @error('provenance') is-invalid @enderror">
								@error('provenance')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Mode hébergement</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="mode_heberg" value="{{ $edit->mode_heberg }}" placeholder="Mode hébergement" class="form-control @error('mode_heberg') is-invalid @enderror">
								@error('mode_heberg')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>

						<h3 class="text-center title-2">déménagement</h3><br>

                        <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="email-input" class=" form-control-label">Nouvelle destination</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="email-input" name="destination" value="{{ $edit->nouvelle_destination }}" placeholder="Nouvelle destination" class="form-control @error('destination') is-invalid @enderror">
								@error('destination')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                        </div>
					
					</div>
					<div class="card-footer">
						<a href="{{ route('listHabitant') }}" class="btn btn-danger btn-sm text-white">
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