<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="author" content="Ste Brennan - Code Computerlove - http://www.codecomputerlove.com/" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<script src="/kwdd/kwdd_mobile_site/js/jquery.mobile-1.1.0.js"></script>
<script src="/kwdd/kwdd_mobile_site/js/lib/klass.min.js"></script>
<script src="/kwdd/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>

<script src="/kwdd/kwdd_mobile_site/js/code.photoswipe.jquery-3.0.4.min.js"></script>
<script>


		(function(window, $, PhotoSwipe){

			

			$(document).ready(function(){

				

				$('div.gallery-page')

					.live('pageshow', function(e){

						

						var 

							currentPage = $(e.target),

							options = {},

							photoSwipeInstance = $("ul.gallery a", e.target).photoSwipe(options,  currentPage.attr('id'));

							

						return true;

						

					})

					

					.live('pagehide', function(e){

						

						var 

							currentPage = $(e.target),

							photoSwipeInstance = PhotoSwipe.getInstance(currentPage.attr('id'));



						if (typeof photoSwipeInstance != "undefined" && photoSwipeInstance != null) {

							PhotoSwipe.detatch(photoSwipeInstance);

						}

						

						return true;

						

					});

				

			});

		

		}(window, window.jQuery, window.Code.PhotoSwipe));

</script>
<link rel="stylesheet" href="/kwdd/kwdd_mobile_site/css/jquery-mobile.css" type="text/css" />
<link rel="stylesheet" href="/kwdd/kwdd_mobile_site/css/photoswipe.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MB Slider</title>
</head>

<body>

<div data-role="page" id="Home">

    
    <div data-role="page" data-add-back-btn="true" id="Gallery1" class="gallery-page">
    
        <div data-role="gallery">
        
            <ul class="gallery">
                <li><a href="" rel="external"><img src="/kwdd/kwdd_mobile_site/images/background_image_01.jpg"  /></a></li>
                <li><a href="" rel="external"><img src="/kwdd/kwdd_mobile_site/images/background_image_02.jpg"  /></a></li>
                <li><a href="" rel="external"><img src="/kwdd/kwdd_mobile_site/images/background_image_03.jpg"  /></a></li>
                <li><a href="" rel="external"><img src="/kwdd/kwdd_mobile_site/images/background_image_04.jpg"  /></a></li>
            </ul>
        
        </div>
        
    </div>
</div>    
</body>
</html>