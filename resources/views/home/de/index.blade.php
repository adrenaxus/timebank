@extends("home.de.layout")

@section("content")


  <!-- Header -->
  <header class="masthead text-center" id="zeitbank">
    <div class="container">
      <img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="files/logo_small.png" alt="">
	  
	  
		<p><strong>Banca dl Tëmp Gherdëina (Zeitbank)- Was ist das?</strong><br>
		Die Banca dl Tëmp Gherdëina ist eine soziale Einrichtung, ein Verein ohne
		Gewinnabsicht, die das Ziel verfolgt, den unentgeltlichen Austausch von
		Diensten und Tätigkeiten zu unterstützen.
		</p>
		
		<hr>
		
		<p><strong>Wie werde ich Mitglied der Banca dl Tëmp Gherdëina(BTG)?</strong><br>
		Schreibe dich bei einem der Schalter
		der Banca dl Tëmp Gherdëina ein
		und gib an, welche Dienstleistungen
		du anbieten und welche du in
		Anspruch nehmen möchtest.
		</p>
		
		<hr>
		
		<p><strong>Wie funktioniert es?</strong><br>
		Sobald ein Mitglied der Banca
		dl Tëmp Gherdëina eine von dir
		angebotene Dienstleistung braucht,
		wirst du kontaktiert und du kannst entscheiden,
		ob und wann du diesen Dienst leisten willst. Im Gegenzug kannst auch
		du Dienstleistungen von anderen Mitgliedern in Anspruch nehmen.
		Erbrachte Leistungen werden dir auf deinem Zeitkonto gutgeschrieben, das
		Konto des Leistungsempfängers wird mit der entsprechenden Zeit belastet.
		</p>
		
		<hr>
		
		<p><strong>Wer kann Mitglied werden?</strong><br>
		Alle volljährigen Personen der Gemeinden des Grödentales und der ladinischen
		Fraktionen der Gemeinde Kastelruth können Mitglieder der Banca dl Tëmp
		Gherdëina werden.
		Die Mitglieder sind bei der Ausübung ihrer Tätigkeit im Rahmen der Banca dl
		Tëmp Gherdëina unfall- und haftpflichtversichert. Es ist ein jährlicher Mitglieds-
		beitrag von € 10 zu entrichten.
		</p>
		
		<hr>
	  
    </div>
  </header>
  

  <!-- Portfolio Grid Section -->
  <section class="portfolio bg-primary" id="angebote">
    <div class="container">
     
		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/time-passing.png" alt="">
      <h2 class="text-center text-uppercase">Angebote</h2>
	  
		<!--
		<div class="taglist">
			@foreach(Spatie\Tags\Tag::all() as $tag)
				<button type="button" class="btn btn-light">
				{{ $tag->name }}
				</button>
			@endforeach		  
		</div>
		-->
	  
		<table class="table table-striped table-borderless" style="margin-bottom: 50px;">
		  <thead>
			<tr>
			  <th scope="col">Bild</th>
			  <th scope="col">Titel</th>
			  <th scope="col">Beschreibung</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach(App\Entry::where('type', 'offer')->get() as $demand)
				<tr>
					<td>
						@if($demand->featured_image)
							<img class="featured-image" src="/storage/{{ $demand->featured_image }}">
						@endif
					</td>
					<td>{{ $demand->title }}</td>
					<td>{!! $demand->content !!}</td>
				</tr>
			@endforeach				  
		  </tbody>
		</table>	 
	  
    </div>
  </section>
  
  
  <section class="portfolio bg-primary" id="anfragen">
    <div class="container">
     

		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/rewind-time.png" alt="">
		<h2 class="text-center text-uppercase">Anfragen</h2>
		
		<!--
		<div class="taglist">
			@foreach(Spatie\Tags\Tag::all() as $tag)
				<button type="button" class="btn btn-light btn-small">
				{{ $tag->name }}
				</button>
			@endforeach		  
		</div>
		-->
		
	  
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">Bild</th>
			  <th scope="col">Titel</th>
			  <th scope="col">Beschreibung</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach(App\Entry::where('type', 'request')->get() as $demand)
				<tr>
					<td>
						@if($demand->featured_image)
							<img class="featured-image" src="/storage/{{ $demand->featured_image }}">
						@endif
					</td>
					<td>{{ $demand->title }}</td>
					<td>{!! $demand->content !!}</td>
				</tr>
			@endforeach				  
		  </tbody>
		</table>	 
	  
    </div>
  </section>  
  
  
  
@endsection
