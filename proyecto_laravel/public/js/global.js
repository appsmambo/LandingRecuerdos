function doAnimations( elems ) {
	var animEndEv = 'webkitAnimationEnd animationend';
	elems.each(function () {
		var $this = $(this),
		$animationType = $this.data('animation');
		$this.addClass($animationType).one(animEndEv, function () {
			$this.removeClass($animationType);
		});
	});
}
function alto_slide(){
	ancho_pantalla = jQuery(window).width();
	if(ancho_pantalla >= 768)
	{
		var h_window = jQuery(window).height();
		var new_alto = h_window;
		jQuery('.swiper-container').height(new_alto);
	}/*else{
		jQuery('.swiper-container').css({
			height: 'auto'
		});
	}*/
}

jQuery(window).resize(function(event){
 	alto_slide();
});

jQuery(document).foundation();

$(window).scroll(function(){
    if ($(window).scrollTop() >= 115) {
       $('header').addClass('fixed-header');
    }
    else {
       $('header').removeClass('fixed-header');
    }
});
$('a[href^="#"]').on('click', function(event) {
var target = $($(this).attr('href'));
if (target.length) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: target.offset().top-80
  }, 1000);
}
});
//Menu lateral
$('#nav-expander').on('click',function(e){
 e.preventDefault();
 $('body').toggleClass('nav-expanded');
 jQuery(this).fadeOut(200);
});
$('#nav-close').on('click',function(e){
 e.preventDefault();
 $('body').removeClass('nav-expanded');
 jQuery('#nav-expander').fadeIn(500);
});
jQuery(document).ready(function() {
	jQuery(".bt_contacto").click(function() {
		jQuery("#formulario").appendTo('#form_popup')
	});
	jQuery(".close-button").click(function() {
		jQuery("#form_popup > .formulario").appendTo('#wrapper_form')
	});

	jQuery(".down a").click(function() {
		jQuery('html,body').animate({
		scrollTop: $(".content").offset().top},
		'slow');
	});
	alto_slide();
	jQuery(".mini_slide").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true ,
      autoHeight : true,
      pagination: false,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]

  	});
  	jQuery(".owl_areas").owlCarousel({
		autoPlay: 3000,
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [600,2]
  	});
  	jQuery(".box-galery").owlCarousel({
		navigation:true,
		singleItem : true,
		touchDrag: false,
		mouseDrag:false,
		pagination: false,
		navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]
  	});
	new WOW().init();
	var swiper = new Swiper('.swiper-container', {
		//pagination: '.swiper-pagination',
		//paginationClickable: '.swiper-pagination',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		//effect:'coverflow',
		loop: true,
		slideToClickedSlide:false,
		speed: 1000,
		autoplay: 3500,
		onSlideChangeStart: function (swiper) {
		var $animatingElems = $(".swiper-slide-active").find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
		},
		ontouchStart: function (swiper) {
			var $animatingElems = $(".swiper-slide-next, .swiper-slide-prev").find("[data-animation ^= 'animated']");
			doAnimations($animatingElems);
		},
	});


});
