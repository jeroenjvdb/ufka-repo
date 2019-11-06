$(document).ready(function () {
	$id = "#google-maps-iframe";
	
	$($id).css('pointer-events', 'none');

	$('#google-maps-overlay').on("mousedown",function(){
			$($id).css('pointer-events', 'initial');
	});
	$($id).mouseleave(function () {
			$($id).css('pointer-events', 'none');
	});	
});