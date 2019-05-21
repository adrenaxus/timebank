<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="La Banca dl Tëmp Gherdëina è un‘istituzione sociale, un‘associazione senza scopo di lucro, che favorisce lo scambio di servizi e attività tra persone senzatrasferimento di denaro.">
		<meta name="author" content="">

		<title>Zeitbank - S. Cristina</title>

		<!-- Bootstrap core CSS -->
		<link href="freelancer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="freelancer/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		<!-- Plugin CSS -->
		<link href="freelancer/vendor/magnific-popup/magnific- .css" rel="stylesheet" type="text/css">

		<!-- Custom styles for this template -->
		<link href="freelancer/css/freelancer.min.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
    </head>
    <body id="page-top">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="http://68.183.71.90"><img src="files/logo_small.png" width="110" height="110" class="d-inline-block align-top" alt=""></a>
		  <button class="navbar-toggler navbar-toggler-right text-uppercase bg-success text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#zeitbank">Zeitbank</a>
			  </li>		
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#angebote">Angebote <span class="badge bade-pill badge-success">
					{{  App\Entry::where('type', 'offer')->get()->count() }}
				</span></a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#anfragen">Anfragen <span class="badge bade-pill badge-success">
					{{  App\Entry::where('type', 'request')->get()->count() }}
				</span></a>
			  </li>		  
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kontakt">Kontakt</a>
			  </li>
			</ul>
				<div class="my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						@if (Route::has('login'))
							@auth
								<li class="nav-item"><a class="nav-link text-primary" href="/btg">Meine Bank</a></li>
							@else
								<li class="nav-item"><a class="nav-link text-primary" href="/btg">Login</a></li>
							@endauth
						@endif	
					</ul>
				</div>		
				
			<ul class="navbar-nav languages">
				<li class="nav-item"><a class="active" href="/de">de</a></li>
				<li class="nav-item"><a href="/it">it</a></li>
				<li class="nav-item"><a href="/ld">ld</a></li>
			</ul>				
				
		  </div>
		</div>
		</nav>
		
		
		 @yield('content')
		
		
		  <!-- About Section -->
		  <section class="mb-0" id="kontakt">
			<div class="container">
			
			
				<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/store.png" alt="">
			
			  <h2 class="text-center text-uppercase">Kontakt</h2>
			  <div class="row">
			 
			  
			  
				<div class="col-lg-4 ml-auto">
				  <p class="lead text-center">
					Sitz St. Ulrich:<br>
					San Durich Bibliothek<br>
					S. Durich Platz, 9<br>
					Telefon: 0471 797 814<br>
					jeden Mitwoch, von 16.00 Uhr bis 18.00 Uhr
				  </p>
				</div>
				<div class="col-lg-4 mr-auto">
				  <p class="lead text-center">
					Sitz St. Christina:<br>
					Bibliothek Tresl Gruber<br>
					Chemunstr., 35<br>
					Telefon: 0471 790 016<br>
					jeden Mitwoch, von 16.00 Uhr bis 18.00 Uhr
				  </p>
				</div>
				<div class="col-lg-4 mr-auto">
				  <p class="lead text-center">
					Sitz Wolkenstein:<br>
					Bibliotek O.v. Wolkenstein<br>
					Nivesstr, 16/3<br>
					Telefon: 0471 772 181<br>
					jeden Mitwoch, von 09.00 Uhr bis 11.00 Uhr
				  </p>
				</div>		
			  </div>
			  <div class="text-center mt-4">
					<a href="http://www.bancadltemp.com" title="www.bancadltemp.com">www.bancadltemp.com</a><br>
					<a href="mailto:info@bancadltemp.com" title="info@bancadltemp.com">info@bancadltemp.com</a>
			  </div>
			</div>
		  </section>
		  


		  <!-- Footer -->
		  <footer class="footer text-center">
			<div class="container">
			  <div class="row">
				<div class="col-md-4 mb-5 mb-lg-0">
				</div>
				<div class="col-md-4 mb-5 mb-lg-0">
				  <h4 class="text-uppercase mb-4">Zeitbank Gröden</h4>
				  <ul class="list-inline mb-0">
					<li class="list-inline-item">
					  <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/bancadltemp">
						<i class="fab fa-fw fa-facebook-f"></i>
					  </a>
					</li>
				  </ul>
				</div>
				<div class="col-md-4">
				</div>
			  </div>
			</div>
		  </footer>

		  <div class="copyright py-4 text-center text-white">
			<div class="container">
			  <small>Copyright &copy; Banca dl Tëmp 2019</small>
			</div>
		  </div>

		  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		  <div class="scroll-to-top d-lg-none position-fixed ">
			<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
			  <i class="fa fa-chevron-up"></i>
			</a>
		  </div>


		  <!-- Bootstrap core JavaScript -->
		  <script src="freelancer/vendor/jquery/jquery.min.js"></script>
		  <script src="freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		  <!-- Plugin JavaScript -->
		  <script src="freelancer/vendor/jquery-easing/jquery.easing.min.js"></script>
		  <script src="freelancer/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

		  <!-- Contact Form JavaScript -->
		  <script src="freelancer/js/jqBootstrapValidation.js"></script>
		  <script src="freelancer/js/contact_me.js"></script>

		  <!-- Custom scripts for this template -->
		  <script src="freelancer/js/freelancer.min.js"></script>
		  
		  <!-- Frontend.js -->
		  <script src="js/frontend.js"></script>		
				
		
		
    </body>
</html>