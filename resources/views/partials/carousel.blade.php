<!-- Carousel -->
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-generic" data-slide-to="1"></li>
		<li data-target="#carousel-generic" data-slide-to="2"></li>
		<li data-target="#carousel-generic" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active" style="background-image:url('{{ asset('/img/slides/ufka-slide-1.jpg') }}')"></div>
		<div class="item" style="background-image:url('{{ asset('/img/slides/ufka-slide-2.jpg') }}')"></div>
		<div class="item" style="background-image:url('{{ asset('/img/slides/ufka-slide-3.jpg') }}')"></div>
		<div class="item" style="background-image:url('{{ asset('/img/slides/ufka-slide-4.jpg') }}')"></div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	
	<!-- Carousel hover -->
	<div id="carousel-hover">
		<div id="carousel-hover-image-wrapper">
			<img src="{{ asset('img/logos/ufka-schild-wit.png') }}" alt="UFKA schild wit" id="carousel-hover-image" class="wow zoomIn" data-wow-duration="4s"/>
		</div>
		<div id="carousel-hover-text-wrapper">
			<h1 class="wow fadeIn" data-wow-duration="3s">Universitaire Farmaceutische Kring Antwerpen</h1>
		</div>
	</div>
</div>