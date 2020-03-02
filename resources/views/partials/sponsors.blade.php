<?php
if(!isset($outerCol, $innerCol)){
	$outerCol = "col-sm-6";
	$innerCol = "col-xs-4";
}
?>

<div class="row" id="sponsors">
	<div class="{{ $outerCol }}">
		<div class="row vertical-align">
			<div class="col-xs-3">
				<a href="http://www.amonis.be/nl/starters" target="_blank">
					<img src="{{ asset('img/logos/sponsors/amonis-logo.png') }}" class="sponsor-image" alt="amonis logo"/>
				</a>
			</div>
			<div class="col-xs-3">
				<a href="https://www.trooper.be/UFKA" target="_blank">
					<img src="{{ asset('img/logos/sponsors/trooper-logo.jpg') }}" class="sponsor-image" alt="takeaway.com logo"/>
				</a>
			</div>
			<div class="col-xs-3">
				<a href="http://www.guido.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/guido-logo.png') }}" class="sponsor-image" alt="guido logo"/>
				</a>
			</div>
			<div class="col-xs-3">
				<a href="http://www.radioexpres.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/rex-logo.jpg') }}" class="sponsor-image" alt="guido logo"/>
				</a>
			</div>
		</div>
	</div>
	<div class="{{ $outerCol }}">
		<div class="row vertical-align">
			<div class="{{ $innerCol }}">
				<a href="http://www.curalia.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/curalia-logo.png') }}" class="sponsor-image" alt="curalia logo"/>
				</a>
			</div>
			<div class="{{ $innerCol }}">
				<a href="https://www.studant.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/studant-logo.svg') }}" class="sponsor-image" alt="studant logo"/>
				</a>
			</div>
			<div class="{{ $innerCol }}">
				<a href="https://www.vfso.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/vfso-logo.png') }}" class="sponsor-image" alt="vfso logo"/>
				</a>
			</div>
			<div class="{{ $innerCol }}">
				<a href="https://www.vfso.be/" target="_blank">
					<img src="{{ asset('img/logos/sponsors/vfso-logo.png') }}" class="sponsor-image" alt="vfso logo"/>
				</a>
			</div>
		</div>
	</div>
</div>
