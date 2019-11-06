@extends('layouts.app')

@section('title', 'Sponsors')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Sponsors</h1>
			<p>Een studentenclub is volledig afhankelijk van zijn sponsors. Daarom bedanken wij bij deze onze trouwe sponsors!</p>
		</div>
	</div>
	
	<div class="container" id="sponsors-large">
		@include('partials.sponsors', ['outerCol' => "col-sm-12", 'innerCol' => "col-xs-3"])
	</div>
	
	<div class="content-block dark">
		<div class="container" id="sponsors-info">
			<p>Indien u geïnteresseerd bent om onze studentenclub te sponsoren kan u altijd contact opnemen met één van onze P.R.-verantwoordelijken via ons 
				<a href="{{ url('contact#contact-form') }}">contactformulier</a>
			</p>
		</div>
	</div>
@endsection