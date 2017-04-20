$(document).ready(function(){
	// Animasyonlar
    var options = {
        animateThreshold: 100,
        scrollPollInterval: 20
    }
    $('.aniview').AniView(options);

	// Siyah Açıklama
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});

	// Slider otomatik ilerleme süresi
    $('.carousel').carousel({
		interval: 5000,
		pause: ""
	});


	// Yukarı Çık
	$(window).scroll(function() {
	    if ($(window).scrollTop() > 200) {
	        $('#backtotop').fadeIn();
	    } else {
	        $('#backtotop').fadeOut();
	    }
	});
	$("#backtotop").click(function () {
	   $("html, body").animate({scrollTop: 0}, 300);
	});


	// LightBox
    lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true,
		'disableScrolling': true
    });

	$('.slider4').bxSlider({
		slideWidth: 300,
		minSlides: 2,
		maxSlides: 4,
		moveSlides: 1,
		slideMargin: 10
	});
	$('.bxslider').bxSlider({
		pagerCustom: '#bx-pager',
		adaptiveHeight: true
	});


	$(".overflowHidden .bx-next").hide();
	$(".overflowHidden .bx-prev").hide();


	if( $(window).width() < 460 ){
		$(".bxslider li span").removeClass("zoom");
    }else{
		$(".bxslider li span").addClass("zoom");
    }
	$(".zoom").zoom();





	$("#searchTags").keyup(function(){
        var value = $("#searchTags").val();
        if(value.length==0){
            $("#searchItems .besik").show();
        }else{
            $("#searchItems .besik").hide();
            $("#searchItems .besik:contains("+value+")").show();
        }
    });
});

jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};
