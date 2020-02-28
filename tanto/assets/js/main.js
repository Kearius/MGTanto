$(document).ready(function() {
	$('.home-s-1-slider').slick({
		dots: false,
		arrows: false,
  		infinite: true,
  		speed: 1000,
  		autoPlay: true
	});
	$('.home-s-2-slider').slick({
		dots: true,
		arrows: false,
  		infinite: true,
  		speed: 1000,
  		fade: true,
  		cssEase: 'linear',
  		autoPlay: true
	});
});
$(window).scroll(function(){
  var top = $(window).scrollTop();
    var find_class = $.contains('header', '.scrolled');
    if(top > 200 && find_class == false) { // tu zmieniamy wysokosc - gdy strona zjedzie 920px w dol
      $('header').addClass('scrolled'); // nawigacja otrzyma klase small
    }
    else {
      $('header').removeClass('scrolled'); // w przeciwnym wypadku usuwamy klase small
    }
});