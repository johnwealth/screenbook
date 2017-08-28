 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Screenbook | @yield('title')</title>

 <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('css/icons.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/color.css')}}" >

        <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css')}}">	

    @yield('stylesheets')   
</head>
    <!-- Styles -->

<body>

    <div class="app">
	  
           @include('partials._nav')
       
           @include('partials._messages')

		   @yield('content')

		 

		   @include('partials._footer')
    </div>


@include('partials._javascript')
@yield('scripts')
</body>
</html>
