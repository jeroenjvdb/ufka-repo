@extends('layouts.app')

@section('title', 'Universitaire Farmaceutische Kring Antwerpen')

@section('content')

  @include('partials.carousel')
  
  <div class="container">
  
    @include('partials.sponsors')
  
    <div class="row">
      <div class="col-md-8" id="praeses-dixit">
        <h1 class="page-header">Praeses Dixit</h1>
        <?php
          $blogID='2744273842571929783';
          $APIkey='AIzaSyCOHFCCJwgK9GWTiR2M6RbM-psBgj3itt4';
          $requestURL="https://www.googleapis.com/blogger/v3/blogs/{$blogID}/posts?labels=praeses+dixit&maxResults=1&orderBy=published&key={$APIkey}";
          $string = file_get_contents($requestURL);
          $post = json_decode($string);
          
          if(false && isset($post->items)){
            echo '<h2>' . $post->items[0]->title . '</h2>';
            echo '<p>' . $post->items[0]->content . '</p>';
          }
        ?>

<p>Beste UFKAjaantjes</p>
<p>We zijn al een goeie maand ver in dit academiejaar, maar wat voor een maand was me dit. Het begon met prachtig weer op de openingsdag waar we jullie konden laten genieten van de overheerlijke kaaskroketten die we voor jullie hebben gemaakt. Toen hadden we al door dat jullie er een serieuze lap op willen geven dit jaar. Dit werd nogmaals bevestigd op het openingsvatje, waar de eerste vaten van het lustrumjaar in een mum van tijd helemaal geledigd waren. (focking animals) </p>
<p>In tussentijd is er ook een nieuwe lading stinkende schachten aangekomen in Wilrijk. Op 15 oktober hebben onze Schachtentemster Sarah en Zedenmeester Robbe de schachten de meest blije dag van hun leven bezorgt. Deze zullen zij nooit vergeten. Dat ze niet konden zuipen zagen we al van ver, hopelijk leren ze dit nog gedurende het jaar. Op de doopcantus waren ze ook allemaal niks waard (just gelijk onze temster die avond), hopelijk vinden we op de schachtenkoning(in)cantus (4 november) waardige opvolgers voor Louise en Carlos. </p>
<p>De komende maanden staat de agenda bomvol om iedereen de nodige ontspanning aan te bieden tussen de lessen en practica door. Zo staat er op donderdag 7 november een klassieker op jullie te wachten namelijk EURODEALS TD. Kom mee genieten van de zotte acties die u maar 1 euro gaat kosten! Na wat te zwijnen in de KP is het tijd om het nieuwe kleedje dat je gekocht hebt eindelijk eens aan te doen of het kostuum dat je al jaren hebt nog eens vanonder het stof te halen, want op 15 november is er ons Galabal dat dit jaar georganiseerd is door Lieze. Naast een fancy dansfeest en vele verrassingen kan er ook genoten worden van een 3 gangenmenu met 3u lang drank a volonté! De laatste TD van dit semester zal samen met kinesia zijn, waar we de KP helemaal gaan omvormen tot een zee van goud. Maar het belangrijkste is dat het een ALL-IN TD wordt!!!!</p>
<p>De ouwezakken zullen hun doopfrak en lint nog eens van onder het stof mogen halen op zaterdag 30 november.</p> 
<p>Dankzij onze Natan staat er weer een prachtige skireis op de planning in de lesvrijeweek, er zijn nog een beperkt aantal plaatsten over, dus als je kan nog mee als je wilt. Niet twijfelen is de boodschap! </p>
<p>Zo geniet nog verder van deze gaper en tot de volgende UFKA activiteiten xxx</p>
<p>Dixit,</p>
<p>Pierre-Emmanuel De Smedt</br>
UFKA praeses 2019-2020</br>
UFKA Feest 2018-2019</p>



      </div>
      <div class="col-md-4" id="outer-sidebar">
        <div id="sidebar" data-clampedwidth="#outer-sidebar">
          <p>Hey liefste roddeltantes en -nonkels, hier is een plekje om al je zotte, zatte, sappige en vooral grappige verhalen te zetten. Links naar grappige foto’s zijn ook altijd welkom. Het is compleet anoniem dus hou je zeker niet in. De leukste wist-je-datjes zullen we later verwerken in de gaper.</p>
          
          {!! Form::open() !!}
            <div class="form-group">
              {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'Wist je dat...')) !!}
            </div>
            {!! app('captcha')->display(); !!}
            {!! Form::button('<span class="glyphicon glyphicon-send" aria-hidden="true"></span>Verzenden', array('type' => 'submit', 'class' => 'btn btn-default')) !!}
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
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('js/partials/carousel.js') }}"></script>
@endpush
