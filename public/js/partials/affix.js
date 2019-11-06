if( false ){
	$('#sidebar').affix({
		offset: {
			top: function () {
				return (this.top = $('#praeses-dixit').offset().top - $('.navbar').outerHeight() - 20)
			},
			bottom: function () {
				return (this.bottom = $('.footer').outerHeight(true) + standardMargin + 30)
			}
		}
	});

	//Affix width fix
	$(document).ready(function () {
		$('[data-clampedwidth]').each(function () {
				var elem = $(this);
				var parentPanel = elem.data('clampedwidth');
				var resizeFn = function () {
						var sideBarNavWidth = $(parentPanel).outerWidth() - parseInt(elem.css('paddingLeft')) - parseInt(elem.css('paddingRight')) - parseInt(elem.css('marginLeft')) - parseInt(elem.css('marginRight')) - parseInt(elem.css('borderLeftWidth')) - parseInt(elem.css('borderRightWidth'));
						elem.css('width', sideBarNavWidth);
				};

				resizeFn();
				$(window).resize(resizeFn);
		});
	});

	$(document).ready(f);
	$(window).resize(f);

	function f(){
		$('#sidebar').data('bs.affix').options.offset.top = $('#praeses-dixit').offset().top - $('.navbar').outerHeight() - 20;
		$('#sidebar').data('bs.affix').options.offset.bottom = $('.footer').outerHeight(true) + standardMargin + 30;
		$('#sidebar').affix('checkPosition');
	}
}