@extends('front.layouts.master')

@section('title', 'Liste des centre de santés')

@section('content')

	<br><br>
	<section class="p-t-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="title-5 m-b-35">liste des centres de santé</h3>
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>NOM</th>
									<th>LOCALISATION</th>
									<th>SERVICES</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($items as $item)
									<tr class="tr-shadow">
										<td>{{ $item->nomCdsan }}</td>
										<td>{{ $item->locCdsan }}</td>
										<td>{{ $item->servCdsan }}</td>
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
	<br><br>
@endsection