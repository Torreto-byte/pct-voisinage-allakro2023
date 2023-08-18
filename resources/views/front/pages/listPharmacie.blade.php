@extends('front.layouts.master')

@section('title', 'Liste des pharmacies')

@section('content')

	<br><br><br>
	<section class="p-t-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="title-5 m-b-35">liste des pharmacies</h3>
					<!-- DATA TABLE -->
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>NOM</th>
									<th>LOCALISATION</th>
									<th>EN GARDE</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($items as $item)
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
					<!-- END DATA TABLE -->
				</div>
			</div>
		</div>
	</section>
	<br><br><br>

@endsection