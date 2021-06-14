$(function(){
	var navbar = $('.navbar');
	
	$(window).scroll(function(){
		if($(window).scrollTop() <= 80){
			navbar.removeClass('navbar-scroll');
		//	navbar.removeClass('navbar-dark');
			navbar.removeClass('bg-dark');
			navbar.addClass('navbar-dark');
			navbar.addClass('bg-light');
			
		} else {
			navbar.addClass('navbar-scroll');
			navbar.removeClass('navbar-light');
			navbar.removeClass('bg-light');
			navbar.addClass('navbar-dark');
			navbar.addClass('bg-dark');
		}
	});
});

$(window).scroll(function(){
    $(".intro").css("opacity", 1 - $(window).scrollTop() / 250);
  });

