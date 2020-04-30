<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Universitaire Farmaceutische Kring Antwerpen">
    <meta name="keywords" content="ufka">
    <meta name="author" content="Jules Talloen">
    <meta name="theme-color" content="#219a0d">
    
    <!-- Facebook -->
    <meta property="og:url" content="{{ Request::fullUrl() }}" />
    <meta property="og:title" content="UFKA | @yield('title')" />
    <meta property="og:description" content="Universitaire Farmaceutische Kring Antwerpen" />
    <meta property="og:image" content="{{ asset('img/logos/ufka-schild-vierkant.png') }}" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@UFKAntwerpen">
    <meta name="twitter:title" content="UFKA | @yield('title')">
    <meta name="twitter:creator" content="@JulesTalloen">
    <meta name="twitter:description" content="Universitaire Farmaceutische Kring Antwerpen">
    <meta name="twitter:image:src" content="{{ asset('img/logos/ufka-schild-vierkant.png') }}">
    <!-- Google Plus -->
    <meta itemprop="name" content="UFKA | @yield('title')">
    <meta itemprop="description" content="Universitaire Farmaceutische Kring Antwerpen">
    <meta itemprop="image" content="{{ asset('img/logos/ufka-schild-vierkant.png') }}">
    
    <link rel="icon" href="{{ asset('ufka-schild-vierkant.ico') }}">

    <title>UFKA | @yield('title')</title>
    
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47884595-3', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    @include('partials.flash')
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-left" href="{{ url('home') }}">
            <img src="{{ asset('img/logos/ufka-schild.png') }}"/>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="navbar-page-links">
            <li {!! Request::is('home') ? ' class="active"' : null !!}><a href="{{ url('home') }}">Home</a></li>
            <li {!! Request::is('over') ? ' class="active"' : null !!}><a href="{{ url('over') }}">Over</a></li>
            <li {!! Request::is('kalender') ? ' class="active"' : null !!}><a href="{{ url('kalender') }}">Kalender</a></li>
            <li {!! Request::is('sponsors') ? ' class="active"' : null !!}><a href="{{ url('sponsors') }}">Sponsors</a></li>
            <li {!! Request::is('contact') ? ' class="active"' : null !!}><a href="{{ url('contact') }}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="facebook-link"><a href="https://www.facebook.com/UFKAntwerpen/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
            <li id="instagram-link"><a href="https://www.instagram.com/ufkantwerpen/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li id="twitter-link"><a href="https://twitter.com/UFKAntwerpen" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <li id="linkedin-link"><a href="https://www.linkedin.com/company/ufkantwerpen/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')
    
    <!-- Footer -->
    <footer class="footer">
      <div class="container" id="top-footer">
        <div class="row">
          <div class="col-md-4">
            <h3>Over</h3>
            <p>De faculteitskring van de studenten Farmaceutische Wetenschappen aan de Universiteit Antwerpen. In 1965 werd de kring opgericht aan het toenmalige UIA (nu campus Drie Eiken).</p> 
            <p>Onze activiteiten bestaan uit het organiseren van cantussen, TD's, quizzen en infosessies die farmaceutisch gericht zijn.</p>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs" id="footer-logo">
            <img src="{{ asset('img/logos/ufka-schild-wit.png') }}" alt="UFKA schild wit" class="wow zoomIn" data-wow-offset="50"/>
          </div>
          <div class="col-md-4">
            <h3>Contact</h3>
            <p><span class="glyphicon glyphicon-education" aria-hidden="true"></span> <a href="https://goo.gl/maps/sUcGNuevSQF2" target="_blank">Campus Drie Eiken, Antwerpen</a></p>
            <br/>
            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Voor bedrijven: pr [at] ufka [dot] be</p>
            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Praeses: praeses [at] ufka [dot] be</p>
            <br/>
            <p><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <a href="{{ url('contact#contact-form') }}">Contactformulier</a></p>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="bottom-footer">
        <div class="container">
          <p>Website &copy; <?php echo date("Y"); ?> Jeroen Van den Broeck | <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> webmaster [at] ufka [dot] be</p>
        </div>
      </div>
    </footer>


    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @stack('scripts')
    
  </body>
</html>
