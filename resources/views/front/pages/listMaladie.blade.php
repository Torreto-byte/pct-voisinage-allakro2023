@extends('front.layouts.master')

@section('title', 'Liste des maladies')

@section('content')

	<br><br>
	<section class="p-t-20">
		<div class="container">
			<div class="row">
				<h3 class="title-5 m-b-35">liste des maladies</h3>
				<div class="col-md-12">
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>NOM DE LA MALADIE</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($items as $item)
									<tr class="tr-shadow">
										<td>{{ $item->libMal }}</td>
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
	</section><br><br>

@endsection