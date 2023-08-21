@extends('admin.layouts.master')

@section('title', 'Liste des habitants')

@section('content')

	<div class="row pb-5">
		<div class="col-md-12">
		<div class="overview-wrap">
			<h2 class="title-1">LISTE DES HABITANTS</h2>
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<!-- DATA TABLE -->
			<div class="table-data__tool">
				<div class="table-data__tool-left"></div>
				<div class="table-data__tool-right">
					<a href="{{ route('addHabitant') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>Enregistrer un habitant</a>
				</div>
			</div>
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			@endif
			<div class="table-responsive table-responsive-data2">
				<table class="table table-data2" id="order-listing">
					<thead>
						<tr>
							<th>NOM & PRENOMS</th>
							<th>CONTACT</th>
							<th>GENRE</th>
							<th>DATE & LIEU DE NAISSANCE</th>
							<th>FONCTION</th>
							<th>LIEU HABITATION</th>
							<th>STATUT</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($items as $item)
							<tr class="tr-shadow">
								<td>{{ $item->nomHabt." ".$item->prenomHabt }}</td>
								<td>{{ $item->contactHabt }}</td>
								<td>{{ $item->sexeHabt }}</td>
								<td>{{ date('d-m-Y', strtotime($item->date_naissanceHabt)) }}</td>
								<td>{{ $item->fonctionHabt }}</td>
								<td>{{ $item->lieu_habitation }}</td>
								<td>{{ $item->statut }}</td>
								<td>
									<div class="table-data-feature">
										<a href="{{ route('editHabitant', $item->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<form action="{{ route('supprimerHabitant', $item->id) }}" method="POST">
											@csrf
                                            @method('DELETE')
											<button onclick= "return confirm('Voulez-vous confirmer cette action ?')" class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</form>
										
										<button class="item" data-toggle="tooltip" data-placement="top" title="Autres">
											<i class="zmdi zmdi-more"></i>
										</button>
									</div>
								</td>
							</tr>
							<tr class="spacer"></tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
			<!-- END DATA TABLE -->
		</div>
	</div>

@endsection