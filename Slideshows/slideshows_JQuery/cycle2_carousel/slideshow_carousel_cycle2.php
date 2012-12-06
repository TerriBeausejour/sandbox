<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Snarkk Banner</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="./jquery.cycle2.js"></script>
<script src="./jquery.cycle2.carousel.js"></script>
<script src="./slideshow_carousel_cycle2.js"></script>

<link rel="stylesheet" type="text/css" href="slideshow_carousel_cycle2.css">

<script>
  $(document).ready(function(){  
  	galleryInit();
	setEventDecadeHeaderEffect(5000, 220000); 
  });
</script>
</head>

<body>


<div class="HeaderTitle">
<h1 class="MyEvents">My Pictures</h1>
<h1 class="MyDecadeSong">Picture Details</h1>
</div>

    <div id="banner-slideshow" class="cycle-slideshow cycle-autoinit" 
            data-cycle-fx="carousel"
            data-cycle-delay="5000"
            data-cycle-speed="18000"
            data-cycle-timeout="1"
            data-cycle-prev="#cycle-prev"
        	data-cycle-next="#cycle-next"
            data-cycle-easing="linear">
   
        
      <img src="./images/Banners/2010s_001_0001.jpg">
      <img src="./images/Banners/2010s_001_0002.jpg">
      <img src="./images/Banners/2010s_001_0003.jpg">
      <img src="./images/Banners/2010s_001_0004.jpg">
      <img src="./images/Banners/2010s_001_0005.jpg">
      <img src='./images/Banners/2010s_002_0001.jpg'>
      <img src='./images/Banners/2010s_002_0002.jpg'>
      <img src='./images/Banners/2010s_002_0003.jpg'>
      <img src='./images/Banners/2010s_002_0004.jpg'>
      <img src='./images/Banners/2010s_003_0001.jpg'>
      <img src='./images/Banners/2010s_003_0002.jpg'>
      <img src='./images/Banners/2010s_003_0003.jpg'>
      <img src='./images/Banners/2010s_003_0004.jpg'>
      <img src='./images/Banners/2010s_003_0005.jpg'>
      <img src='./images/Banners/2010s_003_0006.jpg'>
        
        <!-- 
            JSON array of slides to be loaded progressively,
            nested inside a script block.  The script block does not need
            to be inslide the slideshow container, it can be anywhere on the
            page.  Note the type on the script tag.
        -->
       <!-- <script id="images" type="text/cycle">
        [
			
        ]
        </script>-->
    </div> 
</body>
</html>