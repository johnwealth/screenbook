<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Screenbook | @yield('title')</title>

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('css/icons.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('css/color.css')}}" >

		<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css')}}">	
</head>
<body>

    <div class="#app">
	    
           @yield('topmost')
	 
		   @yield('content')

		   @yield('footer')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    	<script src="{{asset('js2/jquery.min.js')}}" type="text/javascript"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.extension.video.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/revolution.initialize.js')}}"></script>	

	<script src="{{asset('js2/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js2/html5lightbox.js')}}"></script>
	<script src="{{asset('js2/counter.js')}}"></script>
	<script src="{{asset('js2/isotope.j')}}s"></script>
	<script src="{{asset('js2/script.js')}}" type="text/javascript"></script>

	<script src="{{('js/script.js')}}" type="text/javascript">
	$(".collapse")..collapse('hide')
	</script>
</body>
</html>
