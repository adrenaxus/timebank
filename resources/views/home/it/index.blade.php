@extends("home.it.layout")

@section("content")


  <!-- Header -->
  <header class="masthead text-center" id="banca-del-tempo">
    <div class="container">
      <img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="files/logo_small.png" alt="">
	  
	  
		<p><strong>Banca dl Tëmp Gherdëina (Banca del Tempo)– Cos‘è?</strong><br>
		La Banca dl Tëmp Gherdëina è un‘istituzione sociale, un‘associazione senza
		scopo di lucro, che favorisce lo scambio di servizi e attività tra persone senza
		trasferimento di denaro.
		</p>
		
		<hr>
		
		<p><strong>Come divento socio di Banca dl Tëmp Gherdëina (BTG)?</strong><br>
		Registrati presso uno degli sportelli della Banca dl Tëmp Gherdëina
		indicando le attività che desideri offrire e quelli che ti piacerebbe ricevere
		</p>
		
		<hr>
		
		<p><strong>Come funziona?</strong><br>
		Non appena un socio della Banca dl Tëmp Gherdëina ha bisogno di un’attività
		che vuoi offrire, sarai contattato e potrai decidere se e quando la vorrai fare.
		In cambio puoi richiedere da altri soci servizi di cui hai bisogno.
		Le attività da te fornite saranno accreditate sul tuo conto orario e le ore
		corrispondenti al servizio prestato saranno addebitate sul conto del beneficiario.
		</p>
		
		<hr>
		
		<p><strong>Chi può diventare socio?</strong><br>
		Possono diventare soci della Banca dl Tëmp Gherdëina tutte le persone maggiorenni
		residenti nei comuni della Val Gardena e delle frazioni ladine di Castelrotto.
		Tutti i soci sono coperti da assicurazione di responsabilità civile verso
		terzi e infortuni nell‘ambito delle loro attività in
		relazione alla Banca dl Tëmp Gherdëina.
		È richiesto il versamento di una quota
		associativa annuale di € 10.
		</p>
		
		<hr>
	  
    </div>
  </header>
  

  <!-- Portfolio Grid Section -->
  <section class="portfolio bg-primary" id="offerte">
    <div class="container">
     
		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/time-passing.png" alt="">
      <h2 class="text-center text-uppercase">Servizi offerti</h2>
	  
		<!--
		<div class="taglist">
			@foreach(Spatie\Tags\Tag::all() as $tag)
				<button type="button" class="btn btn-light">
				{{ $tag->name }}
				</button>
			@endforeach		  
		</div>
		-->
	  
		<table class="table table-striped" style="margin-bottom: 50px;">
		  <thead>
			<tr>
			  <th scope="col">Immagine</th>
			  <th scope="col">Titolo</th>
			  <th scope="col">Descrizione</th>
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
  
  
  <section class="portfolio bg-primary" id="richieste">
    <div class="container">
     

		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/rewind-time.png" alt="">
		<h2 class="text-center text-uppercase">Servizi richiesti</h2>
		
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
