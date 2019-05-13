<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">		
		

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <a class="navbar-brand" href="#">
			<img src="https://w2ncloud.com/uploads/tobiasklassen/igNn36NJEQu5-30x30.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
			BancaDlTëmp
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  			  
			  
			  <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Dropdown
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			  </li>
			</ul>
			<div class="my-2 my-lg-0">
				<ul class="navbar-nav mr-auto">
					@if (Route::has('login'))
						@auth
							<li class="nav-item"><a class="nav-link" href="/nova/admin">Manage</a></li>
						@else
							<li class="nav-item"><a class="nav-link" href="/nova/admin">Login</a></li>
						@endauth
					@endif	
				</ul>
			</div>
		  </div>
		</nav>	
	
	
	
        <div class="container-fluid">

            <div class="content">
                
				
				<img style="margin-top: 100px;" src="https://w2ncloud.com/uploads/tobiasklassen/igNn36NJEQu5-200x200.jpg">
				<div class="title m-b-md">
                    Banca dl Tëmp
                </div>
				
				
				<h1>Anfragen</h1>
				
				<div class="container">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Bild</th>
						  <th scope="col">Titel</th>
						  <th scope="col">Beschreibung</th>
						  <th scope="col">Datum</th>
						  <th scope="col">Optionen</th>
						</tr>
					  </thead>
					  <tbody>
						@foreach(App\Entry::where('type', 'demand') as $demand)
							<tr>
								<td>
									{{ $demand->id }}
								</td>
								<td>
									<img src="{{ $demand->featured_image }}">
								</td>
								<td>{{ $demand->title }}</td>
								<td>{{ $demand->content }}</td>
								<td>{{ $demand->published_at }}</td>
								<td><button type="button" class="btn btn-danger">Danger</button></td>
							</tr>
						@endforeach				  
					  </tbody>
					</table>				
				</div>

				
				<h1>Angebote</h1>
				
				<div class="container">
					<table class="table">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Bild</th>
						  <th scope="col">Titel</th>
						  <th scope="col">Beschreibung</th>
						  <th scope="col">Wann?</th>
						</tr>
					  </thead>
					  <tbody>
						@foreach(App\Entry::where('type', 'offer') as $offer)
							<tr>
								<td>
									{{ $offer->id }}
								</td>
								<td>
									<img style="width: 50px;" src="/storage/{{ $offer->featured_image }}">
								</td>
								<td>{{ $offer->title }}</td>
								<td>{{ $offer->content }}</td>
								<td>{{ $offer->published_at->format("d M Y") }}</td>
							</tr>
						@endforeach				  
					  </tbody>
					</table>			
				</div>
				

				<!--
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
				-->
            </div>
        </div>
		
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>		
		
		
    </body>
	
	
	
	
</html>
