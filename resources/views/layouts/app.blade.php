 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Screenbook | @yield('title')</title>

    @include('partials._style')

</head>
    

<body>
     @include('partials._nav')

    <div class="app">
	   
           @include('partials._messages')
      
		   @yield('content')
        
    </div>

		   @include('partials._footer')

@include('partials._javascript')

</body>
</html>
