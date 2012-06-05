<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 ){
window.location= "http://www.michaelbudd.org/kwdd/kwdd_mobile_site/";
}


</script>
<script src="/kwdd/js/jquery-1.7.2.min.js"></script>
<script src="/kwdd/js/customSlider.js"></script>
<script type="text/javascript">

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
</script>
<link rel="stylesheet" href="/kwdd/css/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MB Slider</title>
</head>

<body>
	<div class="wrapper">
    	<h1>MB Slider</h1>
    </div>
    
    <div class="slider">
    		<div class="reduced-opacity-slider">
				<div id="previous_arrow">
                	<div id="previous_arrow_link">
                		<img src="/kwdd/images/arrow-left.png" />
                    </div>
                </div>
                
            	<div class="inside-reduced-opacity">
                </div>
            </div>
            <div class="normal-opacity-slider"></div>
            <div class="reduced-opacity-slider">
            	<div id="next_arrow">
                	<div id="next_arrow_link">
                		<img src="/kwdd/images/arrow-right.png" />
                    </div>
                </div>
            	<div class="inside-reduced-opacity">
                </div>
            </div>
            
    		<div class="slider-overlay">
                <div class="inside-slider-overlay">	
                    <div class="current_round1 firstSet insideSet">
                             <div class="overlay-slide" id="overlay-slide1">Set 1 a</div>
                             <div class="overlay-slide" id="overlay-slide2">Set 1 b</div>
                             <div class="overlay-slide" id="overlay-slide3">Set 1 c</div>
                             <div class="overlay-slide" id="overlay-slide4">Set 1 d</div>

                    </div>
                      <div class="current_round2 insideSet">
                             <div class="overlay-slide" id="overlay-slide1">Set 2 a</div>
                             <div class="overlay-slide" id="overlay-slide2">Set 2 b</div>
                             <div class="overlay-slide" id="overlay-slide3">Set 2 c</div>
                             <div class="overlay-slide" id="overlay-slide4">Set 2 d</div>
                    </div>
                      <div class="current_round3 lastSet insideSet">
                             <div class="overlay-slide" id="overlay-slide1">Set 3 a</div>
                             <div class="overlay-slide" id="overlay-slide2">Set 3 b</div>
                             <div class="overlay-slide" id="overlay-slide3">Set 3 c</div>
                             <div class="overlay-slide" id="overlay-slide4">Set 3 d</div>
                    </div>
           	 	</div><!-- closing of inside-slider-overlay" -->
       
            </div><!-- closing of slider-overlay -->                   
    </div>
    
    <div class="wrapper">
    </div>
	
</body>
</html>