@extends('admin.layouts.master')

@section('title', 'Accueil')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1">TABLEAU DE BORD</h2>
			</div>
		</div>
	</div>

	<div class="row m-t-25">
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c1">
				<div class="overview__inner">
					<div class="overview-box clearfix" style="padding-bottom: 20px;">
						<div class="icon">
							<i class="fa fa-users" style="font-size: 300%;"></i>
						</div>
						<div class="text">
							<h2>{{ count($getCountHabitant) }}</h2>
							<span>Habitants</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c2">
				<div class="overview__inner">
					<div class="overview-box clearfix" style="padding-bottom: 20px;">
						<div class="icon">
							<i class="fas fa-h-square" style="font-size: 300%;"></i>
						</div>
						<div class="text">
							<h2>{{ count($getCountCentre) }}</h2>
							<span>Centres Santé</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c3">
				<div class="overview__inner">
					<div class="overview-box clearfix" style="padding-bottom: 20px;">
						<div class="icon">
							<i class="fas fa-medkit" style="font-size: 300%;"></i>
						</div>
						<div class="text">
							<h2>{{ count($getCountPharmacie) }}</h2>
							<span>Pharmacies</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c4">
				<div class="overview__inner">
					<div class="overview-box clearfix" style="padding-bottom: 20px;">
						<div class="icon">
							<i class="fa fa-stethoscope" style="font-size: 300%;"></i>
						</div>
						<div class="text">
							<h2>{{ count($getCountMaladie) }}</h2>
							<span>Maladies</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection