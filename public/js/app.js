var standardMargin = parseInt($("body").css('margin-bottom'));

$(document).ready(f);
$(window).resize(f);

function f(){	
	//Sticky footer
	var footerHeight = $("footer").outerHeight();
	$("body").css('margin-bottom', footerHeight + 'px');
}

wow = new WOW(
	{
	boxClass:     'wow',
	animateClass: 'animated',
	offset:       0,
	mobile:       true,       
	live:         true
}
)
wow.init();

$('div.header-alert').not('.alert-danger').delay(4000).slideUp(300);