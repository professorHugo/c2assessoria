(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });


  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  
  /*Show .Menu-Relatorio*/
	$(document).on('scroll', function() {
		if( $(window).width() > 900 ){
			var scrollDistance2 = $(this).scrollTop();
			if (scrollDistance2 > 500) {
				$('.Menu-Relatorio.Preencher').fadeIn();
				$('.Menu-Relatorio.Preencher').css({
				position: 'fixed',
				backgroundColor: '#fdfdfd'
				});
			} else {
				$('.Menu-Relatorio.Preencher').fadeOut();
			}
		}
	});
  
  // Smooth scrolling using jQuery easing to-Relatorio
  $(document).on('click', 'a.scroll-to-Relatorio', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  
  // Smooth scrolling using jQuery easing Perfil-Associado
  $(document).on('click', 'a.scroll-to-Perfil-Associado', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Perfil-Condutor
  $(document).on('click', 'a.scroll-to-Perfil-Condutor', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Procedencia-Veiculo
  $(document).on('click', 'a.scroll-to-Procedencia-Veiculo', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Sobre-Evento
  $(document).on('click', 'a.scroll-to-Sobre-Evento', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Boletim-Ocorrencia
  $(document).on('click', 'a.scroll-to-Boletim-Ocorrencia', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Policia-Civil
  $(document).on('click', 'a.scroll-to-Policia-Civil', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Policia-Militar
  $(document).on('click', 'a.scroll-to-Policia-Militar', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Copom
  $(document).on('click', 'a.scroll-to-Copom', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  // Smooth scrolling using jQuery easing Mobilidade-Urbana
  $(document).on('click', 'a.scroll-to-Mobilidade-Urbana', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  
  // Smooth scrolling using jQuery easing Convivio-Associado
  $(document).on('click', 'a.scroll-to-Convivio-Associado', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  
  // Smooth scrolling using jQuery easing Convivio-Condutor
  $(document).on('click', 'a.scroll-to-Convivio-Condutor', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  
})(jQuery); // End of use strict
