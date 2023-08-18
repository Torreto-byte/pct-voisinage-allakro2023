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

    	@include('admin.layouts.partials.header')


	</head>

<body class="animsition">

	<div class="page-wrapper">

		{{--  include navbar   --}}
    	@include('admin.layouts.partials.navbar')

		{{--  include sidebar   --}}
    	@include('admin.layouts.partials.sidebar')

		<div class="page-container">

			{{--  include topbar   --}}
    		@include('admin.layouts.partials.topbar')
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">

						{{-- include content page --}}
						@yield('content')

					</div>
        		</div>  
      		</div>

    	</div>

  	</div>

	{{--  include footer   --}}
    @include('admin.layouts.partials.footer')

</body>

</html>