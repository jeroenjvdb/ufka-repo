@extends('layouts.app')

@section('title', 'Contact')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Contact</h1>
			<p>Kom in contact met UFKA</p>
		</div>
	</div>
	
	{{--<div class="content-block">
		<div class="container">
			<h1 class="page-header">Locatie</h1>
			<div id="google-maps-overlay">
				<iframe
					id="google-maps-iframe"
					width="100%"
					height="400"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBcfpZJ8rv2nKC1nTEr7d7BI7uMDbBM2CM
						&q=Campus+Drie+Eiken&zoom=13&language=nl" allowfullscreen>
				</iframe>
			</div>
		</div>
	</div>--}}
		
	<div class="content-block">
		<div class="container" id="contact-form">
			<h1 class="page-header">Contactformulier</h1>
      {!! Form::open() !!}
        <div class="form-group">
          {!! Form::label('email', 'Email adres:') !!}
          {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'voorbeeld@voorbeeld.com']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('name', 'Naam:') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('recipient', 'Ontvanger:') !!}
          {!! Form::select('recipient', ['pr' => 'Public Relations', 'scriptor' => 'Scriptor', 'praeses' => 'Praeses', 'vice-praeses' => 'Vice-praeses', 'webmaster' => 'Webmaster'], 'PR', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('subject', 'Onderwerp:') !!}
          {!! Form::text('subject', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('message', 'Bericht:') !!}
          {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '5']) !!}
        </div>
        {!! app('captcha')->display(); !!}
        <br/>
        {!! Form::button('<span class="glyphicon glyphicon-send" aria-hidden="true"></span>Verzenden', array('type' => 'submit', 'class' => 'btn btn-primary')) !!}
      {!! Form::close() !!}
      
      @if ($errors->any())
        <br/>
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
		</div>
	</div>
	
	<div class="container">
		@include('partials.sponsors')
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/partials/google-maps-embed-scroll-fix.js') }}"></script>
@endpush