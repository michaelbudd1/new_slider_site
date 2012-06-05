// JavaScript Document

$(function(){
	var window_width= $(window).width();
	var window_width_third = window_width - 960;
	var window_width_third = window_width_third / 2;
	$('.reduced-opacity-slider').css('width', window_width_third); 
})

$(function(){
	$(window).resize(function(){
		var window_width= $(window).width();
		var window_width_third = window_width - 960;
		var window_width_third = window_width_third / 2;
		console.log($(window).width());
		$('.reduced-opacity-slider').css('width', window_width_third); 
		});
})