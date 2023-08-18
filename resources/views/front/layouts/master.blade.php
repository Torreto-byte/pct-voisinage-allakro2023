<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title') - PROJET VOISINAGE ALLAKRO</title>

		{{--  include header   --}}

    	@include('front.layouts.partials.header')


	</head>

<body class="animsition">

	<div class="page-wrapper">

		{{--  include topbar   --}}
    	@include('front.layouts.partials.topbar')

		<div class="page-content--bgf7">

			{{-- include content page --}}
			@yield('content')

    	</div>

		<!-- COPYRIGHT-->
		<section class="p-t-60 p-b-20">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							<p>&copy; 2023 UVCI (Tout droit reservés), GROUPE1-BD-DAS - RAJ22-23.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END COPYRIGHT-->

  	</div>

	{{--  include footer   --}}
    @include('admin.layouts.partials.footer')

</body>

</html>