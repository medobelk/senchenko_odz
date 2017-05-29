<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/avenue.css') }}">
	<script
	  src="https://code.jquery.com/jquery-3.1.1.js"
	  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
	  crossorigin="anonymous">
	</script>	
	<script src="{{URL::asset('js/bootstrap.js') }}"></script>	
	
	@yield('page_styles')
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

	<!-- @include('layouts.header') -->
	<div class="container-fluid">	
		<div class="row">
			<div class="col-lg-12 to-home">
				<span><a href="/">Senchenko</a></span>				                                  
			</div>
			@if (!Auth::guest())
				<div class="col-lg-12 user-data">
					<a href="/user/{{ Auth::user()->id }}">
		                {{ Auth::user()->name }}
		            </a>
					<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						         document.getElementById('logout-form').submit();">
						Logout
					</a>

		            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                {{ csrf_field() }}
		            </form>
		        </div>
            @endif 
		</div>
	</div>	
	@yield('content')

	@include('layouts.footer')

</body>
</html>