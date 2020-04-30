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

<p>Geachte commilitones,</p> 
<p>Het coronavirus heeft onze samenleving en het studentenleven volledig stilgelegd, zo ook ons 55ste jaar van UFKA. Het begon allemaal op maandag 23 september. De zon scheen, de eerste pintjes van het academiejaar werden geklonken en het voornaamste was dat we allemaal samen waren om van dit lustrumjaar een top jaar te maken.  De gratis vaten vloeiden rijkelijk, de gratis acties werden gesmaakt en iedereen had het naar zijn zin op de activiteiten van dit jaar. Dit is allemaal te danken aan een fantastisch praesidium! Hoe zij zich hebben ingezet afgelopen jaar, was prachtig om te zien. Na al die maanden is het hoogtijd om iedereen te bedanken voor dit jaar, dat ik nooit zal vergeten.</p> 
<p>Eerst en vooral wil ik mijn mede-feest van vorig jaar Sarah bedanken. Een betere schachtentemmer en skimaatje kon ik mij niet wensen. De schachten hebben kunnen genieten van de blijendag die Robbe en jij hebben voorbereid voor hun. Jullie zijn erin geslaagd om die bende stinkende zwijnen op te leiden tot waardige commilitones! (alle bijna, nu is het nog steeds een stinkende bende)</p> 
<p>Robbe jongen, u kan ik ook net zoals Sarah niet genoeg bedanken om de doop te regelen en de schachten een pracht jaar te geven! Naast zedenmeester was je ook feest en ik weet maar al te goed hoe moeilijk deze job is. Samen met Louise en Liam heb jij je 100% gegeven om alles op tijd op de events te krijgen. Geen ritje was te veel, geen winkel was te ver, geen kratje cara was te veel om mee te nemen, echt aan alle drie duuzendmaal dank hiervoor.  </p> 
<p>Vervolgens wil ik mijn Quaestor Nina ook in de bloemetjes zetten. Voor het tweede jaar op rij heb jij deze functie op je genomen. Net zoals in het eerste jaar heb je gewaakt over het geld en kon je mij steeds zeggen of we er nog een gratis vat konden bijgeven. Zonder u konden we niet zo’n succesvol lustrumjaar bekomen! </p> 
<p>Hanne en Carlos, onze beide public relations van dit jaar. Veel leden (waaronder ikzelf) zullen jullie dankbaar zijn voor de goed gevoelde goodiebag op de openingsdag. Jullie mogen ook echt enorm trots zijn op afgelopen jaar door het binnenhalen van nieuwe partners, het begin van UFKA op trooper en de goed georganiseerde lezingen. Dit is allemaal aan jullie te danken!</p> 
<p>De persoon wie de studenten het meest dankbaar zullen zijn is ongetwijfeld Alexi. Dankzij u is er weer een prachtige examenbundel gemaakt die iedereen ongetwijfeld heeft geholpen tijdens de examens. Hartelijk bedankt hiervoor en om de vergaderingen tot in de puntjes uit te schrijven. </p> 
<p>Yoram, in het begin zijn we een paar keer gebotst, maar jij hebt u zo goed herpakt, waarna ik direct merkte dat ik op je kon rekenen. Bedankt om UFKA naar de volgende ronde te leiden in den ASL, jammer genoeg heeft corona ons de beker ontnomen. De beker is coming home next year.</p> 
<p>De roddelaars van het praesidium, de 2 scriptoren Manu en Margot, bedankt voor de vele roddels en de uren leesplezier in de gapers van dit jaar! Fantastische scriptoren waren jullie! Zonder ik iets vroeg waren de gapers al klaar of stonden de foto’s al online. </p> 
<p>Han en Ruben, mijn partners in crime aan de voortafel, bedankt om mij bij te staan als cantor en onze commilitones zalige cantussen te geven! </p> 
<p>Magomed, merci voor de pareltjes van banners die je dit jaar gemaakt hebt! Ik moest het maar vragen en een paar uur later was de banner al af. Ik ben er zeker van dat je veel mensen hebt weten overtuigen om naar onze activiteiten te komen.</p> 
<p>Philip, na een jaartje rust was ik maar al te blij dat je terug deel uitmaakte van het praesidium. Je hebt je helemaal gesmeten als praegustator. Mega zatte kroegentochten, toffe caféavonden en normaal ging er nog een zot ledenweekend volgen. Misschien kunnen we deze zomer toch nog een ledenweekend organiseren. </p> 
<p>Lépèle, lepel, Natan, man toch 3 jaar lang ski van UFKA, wie had da ooit verwacht? Je hebt in deze 3 jaar veel mensen de tijd van hun leven bezorgd door ze elk jaar opnieuw een top skireis te kunnen aanbieden. Je bent er jammer genoeg niet veel kunnen bijzijn afgelopen jaar, maar de momenten dat je er was, kon ik altijd op je rekenen! Alleen papieren laten meenemen was te moeilijk blijkbaar, merci Helena! 😉</p> 
<p>Stephanie, onze zatte mama van het praesidium, bedankt om mij bij te staan en het constructief advies dat je mij afgelopen jaar hebt gegeven, maar vooral bedankt om samen 10 keer naar de rechtbank te gaan om de vzw in orde te brengen and we did it! Uw metervatje gaan we zo snel mogelijk aanslaan vanaf we terug buiten mogen! </p> 
<p>Fien en Lieze, mijn vice’s, mijn klaagmuur, mijn partners in crime op kringraad, mijn secretaresses, maar vooral vriendinnen waar ik altijd op kon rekenen! Wat had ik moeten doen zonder jullie? Op elk moment van de dag kon ik op jullie advies en raad rekenen. Nu we allemaal thuis in quarantaine zitten, zullen nog veel mensen denken aan UFKA door de truien die ze aan u te danken hebben, Fien! Bedankt om deze te ontwerpen en zo snel in orde te krijgen! </p> 
<p>Ons Lieze hoe kan ik u bedanken voor dit fantastische jaar? Ik wist op voorhand dat je het heel druk ging hebben met je stage en thesis, maar toch bleef je u 100% geven voor de club en zeker voor het prachtige galabal! Ik denk hier nog vaak aan terug hoe geweldig dit galabal was en dit is allemaal aan u te danken. </p> 
<p>Last but not least, onze Jef. Eerst en vooral wil ik u bedanken om er elke maandagavond voor te zorgen dat UFKA het beste van zichzelf gaf op de interfacs, zowel op het veld als aan de toog. Maar vooral bedankt om mij volgend jaar op te volgen als Praeses. Ik kan met mijn volste vertrouwen de fakkel aan u doorgeven en ben er zeker van dat ook het 56ste jaar van UFKA een topjaar wordt!</p> 
<p>Bedankt nog eens allemaal! Wij hebben van dit lustrumjaar een prachtjaar gemaakt, meer dan ik had durven dromen! Dit jaar zal mij voor heel mijn leven bijblijven en dit allemaal dankzij jullie! Het was mij een genoegen om Praeses te mogen zijn van dit fantastisch praesidium en deze prachtige club! Hou jullie goed en tot snel! </p> 
<p>Ut Vivat, Crescat, Floreatque</p> 
<p>UFKA!</p> 
<p>Dixit,</p> 
<p>Pierre-Emmanuel De Smedt <br>
UFKA Praeses 2019-2020 <br>
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
