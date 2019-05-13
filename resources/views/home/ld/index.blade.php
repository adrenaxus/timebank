@extends("home.ld.layout")

@section("content")


  <!-- Header -->
  <header class="masthead text-center" id="banca-dl-temp">
    <div class="container">
      <img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="files/logo_small.png" alt="">
	  
	  
		<p><strong>Banca dl Tëmp Gherdëina– Cie ie pa chël?</strong><br>
		La Banca dl Tëmp Gherdëina ie na istituzion soziela, na lia zënza fin de davani,
		che juda a giamië servijes y ativiteies danter persones, zënza paiamënt.
		</p>
		
		<hr>
		
		<p><strong>Co devënti pa cumëmber dla Banca dl Tëmp Gherdëina (BTG)?</strong><br>
		Scrite ite pra una dla sëntes dla Banca dl Tëmp Gherdëina dajan ite ciun servijes che te ulësses pité
		y ciuni che te ulësses giapé.
		</p>
		
		<hr>
		
		<p><strong>Co vala pa inant?</strong><br>
		Tantosc che n cumëmber dla Banca dl Tëmp Gherdëina à de bujën de n servisc
		che tu pietes, vënies cuntatà da d’ël per fé ora sce y canche te ues l fé.
		Ala medema maniera posses nce tu te damandé servijes da d’autri cumëmbri.
		L’ëures fates vën scrites sun ti cont y trates ju a chiche giapa l servisc.
		</p>
		
		<hr>
		
		<p><strong>Chi possa pa deventé cumëmber?</strong><br>
		Cumëmber dla Banca dl Tëmp Gherdëina possa deventé duta la persones
		sëura i 18 ani di trëi chemuns de Gherdëina y dla frazions ladines dl chemun
		de Ciastel.
		Duc i cumëmbri ie ntan si atività per la Banca dl Tëmp Gherdëina curii
		da na assegurazion de respunsabltà zevila y contra desgrazies.
		L ie da paië ite n cuntribut de € 10 al ann.	  
		</p>
		
		<hr>
	  
    </div>
  </header>
  

  <!-- Portfolio Grid Section -->
  <section class="portfolio bg-primary" id="servijes-1">
    <div class="container">
     
		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/time-passing.png" alt="">
      <h2 class="text-center text-uppercase">Servijes che vën pitei</h2>
	  
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
			  <th scope="col">Pultrët</th>
			  <th scope="col">Titul</th>
			  <th scope="col">Descrizion</th>
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
  
  
  <section class="portfolio bg-primary" id="servijes-2">
    <div class="container">
     

		<img style="width: 220px;" class="img-fluid mb-5 d-block mx-auto" src="/freelancer/img/icons/rewind-time.png" alt="">
		<h2 class="text-center text-uppercase">Servijesc che vën damandei</h2>
		
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
			  <th scope="col">Pultrët</th>
			  <th scope="col">Titul</th>
			  <th scope="col">Descrizion</th>
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
