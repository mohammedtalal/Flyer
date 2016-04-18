<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project Flyer</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">


</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/flyer/public">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
    </nav>

   <!-- this conditions to show a message to user when do something like add new flyer what ever ...  -->
    @include('flashMessage')

	<div class="container">
		@yield('content')
	</div>


  @yield('scripts.footer')
  
</body>
</html>