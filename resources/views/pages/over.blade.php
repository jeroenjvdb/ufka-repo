@extends('layouts.app')

@section('title', 'Over')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Over</h1>
			<p>Geschiedenis, Clublied, Praesidium</p>
		</div>
	</div>
	
	<div class="content-block">
		<div class="container">
			<h1 class="page-header">Over UFKA</h1>
			<p>De Universitaire Farmaceutische Kring Antwerpen, kortweg UFKA, de faculteitskring van de studenten Farmaceutische Wetenschappen aan de Universiteit Antwerpen. In 1965 werd de kring opgericht aan het toenmalige UIA (nu campus Drie Eiken).</p>
			<p>Onze activiteiten bestaan uit het organiseren van cantussen, kroegentochten en TDs. Dit doen we in samenwerking met andere studentenclubs zoals bijvoorbeeld de Eurodeals TD ism Biomedica. Een keer per jaar is er de Groen is Gratis TD, dewelke helemaal alleen door UFKA georganiseerd wordt, speciaal voor onze leden.</p>
			<p>Naast de overduidelijk studentikoze activiteiten zorgen wij ook voor sport en studie. Op het sportgebied doen wij mee met de Interfac, een sportcompetitie georganiseerd door de UA Sportraad. Voor de studies organiseren wij een avond waar eerstejaars een peter/meter (hogerejaarsstudent) aangewezen krijgen waar zij bij terecht kunnen voor vragen.</p>
			<p>Voor het organiseren van al deze activiteiten kan UFKA jaar na jaar rekenen op haar praesidium. Onder leiding van de praeses zorgen deze vrijwilligers ervoor dat elk jaar opnieuw de leden getrakteerd worden op legendarische activiteiten.</p>
			<p>Ut vivat, crescat et floreat UFKA!</p>
		</div>
	</div>
		
	<div class="content-block dark">
		<div class="container" id="praesidium">
			<h1 class="page-header">Praesidium</h1>
			<div class="row">
      
        @foreach($members as $member)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="member wow fadeIn" data-wow-offset="30">
            <?php 
              setlocale(LC_CTYPE, 'en_US.UTF8');
              $fullname = iconv('utf-8', 'ascii//TRANSLIT//IGNORE', strtolower($member->first_name)).'_'.iconv('utf-8', 'ascii//TRANSLIT//IGNORE', preg_replace('/\s+/', '', strtolower($member->last_name)));
            ?>
            @if (file_exists(public_path('img/praesidium/'.$member->full_name_picture)))
              <div class="image">
                <img src="{{ asset('img/praesidium/'.$member->full_name_picture) }}" alt="{{ $member->first_name }} {{ $member->last_name }} profielfoto"/>
              </div>
            @else
              <div class="image">
                <img src="{{ asset('img/person.png') }}"/>
              </div>
            @endif
            <div class="img-overlay-social">
              <ul>
                <li><a href="{{ url('contact#contact-form') }}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></li>
                @if($member->facebook_username)
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                @endif
                @if($member->facebook_username)
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                @endif
                @if($member->facebook_username)
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                @endif
              </ul>
            </div>
            <div class="img-overlay">
              <h4>{{ $member->first_name }} {{ $member->last_name }}</h4>
              <p>{{ $member->function }}</p>
            </div>
          </div>
        </div>
        @endforeach
            
			</div>
		</div>
	</div>
	
	<div class="content-block">
		<div class="container" id="clublied">
			<h1 class="page-header">Clublied</h1>
			<div class="row">
				<div class="col-sm-4">
					<p>Wij zijn apothekers,</p>
					<p>Ge vindt nikske beters.</p>
					<p>Zuipen vaten bier en</p>
					<p>zoeken altijd nat vertier.</p>
					<br/>
					<p>Ons wijven steken veel bougies,</p>
					<p>Van ons palen zijn ze ni vies.</p>
					<p>Hedde eens een farmawijf,</p>
					<p>Dan wete met uwe jos geen blijf.</p>
					<br/>
					<p>Ons venten hebben megatenten,</p>
					<p>Daarop hebben wij patenten.</p>
					<p>Spauwen en weer verder drinken,</p>
					<p>Laat ons nog eens klinken.</p>
					<br/>
					<p>Binnen, buiten nog eens spuiten,</p>
					<p>Ons mokkes zijn niet te stuiten.</p>
					<p>UFKA altijd aan de top,</p>
					<p>Nen dure Porsche en een goei job.</p>
				</div>
				<div class="col-sm-8">
					<img src="{{ asset('img/ufka-clublied-partituur.png') }}" alt="ufka clublied partituur" class="img-responsive"/>
				</div>
			</div>
		</div>
	</div><!--/content-blocks-->
	
	<div class="container">
		@include('partials.sponsors')
	</div>
@endsection
