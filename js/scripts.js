$(function() {
	$('ul.nav a').bind('click',function(event){
		var $anchor = $(this);
                    
		$('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');
        event.preventDefault();
	});
});

$(function(){
    $('.sectionwrapper') .css({'height': (($(window).height()))+'px'});
    $(window).resize(function(){
        $('.sectionwrapper') .css({'height': (($(window).height()))+'px'});
    });
});
