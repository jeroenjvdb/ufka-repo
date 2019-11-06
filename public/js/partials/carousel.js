$(document).ready(f);
$(window).resize(f);

function f(){
	$("#carousel-hover-image-wrapper").height('1px');
	var carouselImageWrapperHeight = $("#carousel-hover-image-wrapper").height() * 0.9;
	$("#carousel-hover-image").height(carouselImageWrapperHeight);
}