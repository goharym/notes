<!DOCTYPE html>
<html>
<head>

	<title>Laravel</title>
   <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

   <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>        <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>

<div class="container">

<div class="row">
<div class="col-lg-10">
</div>

<div class="col-lg-2">

<a href="{{ route('logout') }}"
   onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
    Logout
</a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
 </form>
</div>
</div>
<div class="row">
<div class="col-lg-12">
@yield('content')
	
</div>	
	
</div>

	
</div>

</body>
</html>