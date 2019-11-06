@extends('layouts.app')

@section('title', 'Kalender')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Kalender</h1>
			<p>Bekijk hier al onze activiteiten.</p>
		</div>
	</div>

  <div class="container" id="kalender">
    <iframe src="http://www.ufka.be/google-calendar.php" 
    style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
  </div>

  <div class="container">
		@include('partials.sponsors')
	</div>
@endsection