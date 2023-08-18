@extends('front.layouts.master')

@section('title', 'Accueil')

@section('content')

	<!-- WELCOME-->
	<br><br>
	<section class="welcome p-t-10">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title-4">Bienvenu - 
						<span>{{ Session::get('noms') }}</span>
					</h1>
					<hr class="line-seprate">
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<!-- END WELCOME-->

	<!-- DATA TABLE-->
	<section class="p-t-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="title-5 m-b-35">liste des pharmacies</h3>
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>NOM DE LA PHARMACIE</th>
									<th>LOCALISATION</th>
									<th>EN GARDE</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($pharmacie as $item)
									<tr class="tr-shadow">
										<td>{{ $item->nomPha }}</td>
										<td>{{ $item->lacPha }}</td>
										<td><span class="status--process">{{ $item->pgarPha }}</span></td>
									</tr>
									<tr class="spacer"></tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<br><br><br><br>
	<!-- END DATA TABLE-->

@endsection