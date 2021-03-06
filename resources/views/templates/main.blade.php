<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> @yield('title','Default') | Blog M&M</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')  }}">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen_v1.8.7/chosen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
    @yield('css')

</head>
	<body>
		<div class="container">

			@include('templates.partials.header')
			@include('templates.partials.nav')
     		
			<main role="main" class="container">
		      	<div class="row">
		        	
			        	<!-- Titulo de Articulo -->
				        <br><br>				        
				
			          <!-- Post -->
			          	
							@include('flash::message')
							@include('templates.partials.errors')
							@yield('content')
						<!-- Fin  Post -->
					
					@include('templates.partials.panel_lateral')	        
		      	</div><!-- /.row -->
		    </main><!-- /.container -->
		</div>
		<footer class="card-footer ">
		      <p>Blog M & M <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		      <p>
		        <a href="#">Back to top</a>
		      </p>
		</footer>
		
		<script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('plugins/chosen_v1.8.7/chosen.jquery.js') }}"></script>
		<script scr="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
		
		@yield('js')
		 <script>
	      Holder.addTheme('thumb', {
	        bg: '#55595c',
	        fg: '#eceeef',
	        text: 'Thumbnail'
	      });
	    </script>
	    @yield('script')
	</body>
</html>