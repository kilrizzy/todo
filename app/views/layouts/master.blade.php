<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>ToDo List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::script('/assets/resources/jquery-1.9.1.min.js') }}
	{{ HTML::script('/assets/resources/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('/assets/js/main.js') }}

	@yield('scripts')
	
	{{ HTML::style('/assets/resources/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('/assets/resources/bootstrap/css/bootstrap-responsive.min.css') }}
	{{ HTML::style('/assets/resources/font-awesome/css/font-awesome.min.css') }}
	{{ HTML::style('/assets/css/main.css') }}

	@yield('styles')

</head>
<body>
	<div id="page" class="container-fluid">
		<header id="header" role="banner" class="clearfix">
			<div class="navbar navbar-static-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="{{ URL::to('/') }}">ToDo List</a>
						<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </a>
			            <div class="nav-collapse">
							{{ Menu::handler('main') }}
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="main">
			<!-- check for flash notification message -->
			@if(Session::has('flash_notice'))
			<div class="flash_notice alert alert-success">{{ Session::get('flash_notice') }}</div>
			@endif
			@if (Session::has('flash_error'))
			<div class="flash_error alert alert-error">{{ Session::get('flash_error') }}</div>
			@endif
			<!--Form validation errors-->
			@if( $errors->count() > 0 )
			@foreach ($errors->all() as $error)
			<div class="validation_error alert alert-error">{{ $error }}</div>
			@endforeach
			@endif
			<div id="main-inner">
				<div id="content" class="" role="main">
					@yield('content')
				</div><!-- /#content -->
			</div>
		</div><!-- /#main -->
		<footer id="footer">
			
		</footer><!-- #footer -->
	</div><!-- #page -->
</body>
</html>