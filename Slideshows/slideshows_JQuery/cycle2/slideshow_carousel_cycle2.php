<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Snarkk Banner</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="./slideshow_carousel_cycle2.js"></script>

<link rel="stylesheet" type="text/css" href="slideshow_carousel_cycle2.css">

<script>
  $(document).ready(function(){  
  	galleryInit();
	setEventDecadeHeaderEffect(5000, 8000); 
  });
</script>
</head>

<body>

<div class="HeaderTitle">
<h1 class="MyEvents">My Pictures</h1>
<h1 class="MyDecadeSong">Picture Details</h1>
</div>

<div id="Div_Banner">
  <div id="Banner_Image">
    <div class="cycle-slideshow cycle-autoinit" 
        data-cycle-fx="scrollHorz"
        data-cycle-speed="65000"
        data-cycle-timeout="1"
        data-cycle-easing="linear"
        data-cycle-loader=true
        data-cycle-progressive="#images">
       
        <!-- only one image declared in markup -->
        <img src="images/Test1.png" class="first">
    
        <!-- 
            JSON array of slides to be loaded progressively,
            nested inside a script block.  The script block does not need
            to be inslide the slideshow container, it can be anywhere on the
            page.  Note the type on the script tag.
        -->
        <script id="images" type="text/cycle">
        [
            "<img src='images/Test2.png'>",
            "<img src='images/Test3.png'>"
        ]
        </script>
      
    </div> 
  </div><!--Banner-Image-->
</div><!--Div_Banner-->
</body>
</html>