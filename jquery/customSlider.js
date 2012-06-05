// JavaScript Document

$(function(){
	
	var window_width= $(window).width();
	var window_width_third = window_width - 960;
	var window_width_third = window_width_third / 2;
	$('.reduced-opacity-slider').css('width', window_width_third); 

	var startPosition = 960 - window_width_third;
	var startPosition = 3840 + startPosition;
	var startPosition = "-" + startPosition + "px";
	console.log("Start position: " + startPosition);
	$('.slider-overlay').css('margin-left', startPosition);

})

$(function(){
	$(window).resize(function(){
		var window_width= $(window).width();
		var window_width_third = window_width - 960;
		var window_width_third = window_width_third / 2;
		
		var startPosition = 960 - window_width_third;
		var startPosition = 3840 + startPosition;
		var startPosition = "-" + startPosition + "px";
		
		$('.reduced-opacity-slider').css('width', window_width_third); 
		
		$('.slider-overlay').css('margin-left', startPosition);

		});
})



$(function(){
	
	counter=0;

	$('#next_arrow_link').click(function(event){
	
		counter++;
		
		$(".inside-slider-overlay").css({ "position" : "relative" });
		
		$(".inside-slider-overlay").animate({left:'-=960px'},1000);
		
		
		if(counter % 4==0) {
			$(".inside-slider-overlay").animate({left:'0'},0);

		}
	});
	
	
	// FIND OUT HOW MANY TIMES WE'VE CLICKED BACK, IF MOD OF 4 THEN -1 OFF THE CURRENT ROUND

	$('#previous_arrow_link').click(function(event){
			
		counter ++;	
			
		$(".inside-slider-overlay").css({ "position" : "relative" });

		$(".inside-slider-overlay").animate({left:'+=960px'},1000);
		
		if(counter % 4==0) {
			$(".inside-slider-overlay").animate({left:'0'},0);

		}
	
	});
	
})