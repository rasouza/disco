<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Disco Apprize - Rede social de baladas</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/slider.css') }}
	{{ HTML::style('css/jquery.raty.css') }}

	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/bootstrap-slider.js')}}
	{{ HTML::script('js/jquery.raty.js')}}
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{ URL::to('/') }}">Disco Apprize</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li><a href="/">Discos</a></li>
			<li><a href="{{ URL::to('owner/list') }}">Feedback</a></li>
			<li><a href="{{ URL::to('admin/list') }}">Admin</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</nav>

	<div class="container">
	  <div class="starter-template">

		<h1>@yield('title')</h1>
		@section('desc')
			<p class="lead">
				Descri&ccedil;&atilde;o da p&aacute;gina
			</p>
		@show

	  </div>

	  @yield('content')
	</div><!-- /.container -->


</body>
</html>
