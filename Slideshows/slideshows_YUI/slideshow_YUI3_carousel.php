<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

       <title>YUI Module</title>
        <!-- Due to a bug the CSS has to be included manually -->
        <link type="text/css" rel="stylesheet"
              href="http://yui.yahooapis.com/gallery-2011.03.23-22-20/build/gallery-carousel/assets/skins/sam/gallery-carousel.css">
        <style type="text/css">
		.yui3-carousel-content ol { list-style-type: none; }
        .yui3-carousel-content li { width: 2650px; }
        </style>
        <script type="text/javascript"
                src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"
                charset="utf-8">
        </script>
</head>

<body class="yui3-skin-sam">
    <div id="container" class="yui3-carousel-loading">
        <ol class="yui3-carousel-content">
        <li><img src="../slideshows_CSS/images/2010s_001s.png"></li>
		<li><img src="../slideshows_CSS/images/2010s_002s.png"></li>
		<li><img src="../slideshows_CSS/images/2010s_003s.png"></li>
        </ol>  
    </div>
</body>
    <script type="text/javascript">
    YUI({
    //Last Gallery Build of this module
    gallery: 'gallery-2012.06.06-19-59'
}).use("gallery-carousel", "gallery-carousel-anim", "substitute", function (Y) {
        
		//add startAutoPlay method to Carousel widget's prototype
	   Y.Carousel.prototype.startAutoPlay = function() {
		  var B = this;
		  u = B.get("autoPlayInterval");
		  setInterval (doScrollForward, u);
		  function doScrollForward() {
			 B.scrollForward();
		  }
	   }
		
		Y.on("contentready", function () {
            var carousel = new Y.Carousel({
                boundingBox: "#container",
                contentBox: "#container > ol",
				numVisible: 1,
				isCircular: true,
				autoPlayInterval: 2000
            });
			carousel.plug(Y.CarouselAnimPlugin,{animation:{speed: 69, effect: Y.Easing.easeNone }});
            carousel.render();
			carousel.startAutoPlay();
			
			var carouselNode = Y.one('#container li.first').removeClass('first');
        }, "#container");
    });
    </script>
</html>

<!-- **********
Y.on("contentready", function () {
      var carousel = new Y.Carousel({
         boundingBox: "#gallery-carousel",
         numVisible: 1,         
         isCircular: true,
         autoPlayInterval: 2000,
         contentBox: "#gallery-carousel > ul"
      });
      
        carousel.plug(Y.CarouselAnimPlugin, { speed: 1, effect: Y.Easing.easeOut } );
        carousel.render();
        carousel.startAutoPlay();
      
      var carouselNode = Y.one('#gallery-carousel li.first').removeClass('first');
      
   }, "#footer");   
});

********-->

<!--**********
// Due to a bug the following CSS asset should be included statically:
// http://yui.yahooapis.com/gallery-2010.10.13-20-59/build/gallery-carousel/assets/skins/sam/gallery-carousel.css
 
YUI({
    //Last Gallery Build of this module
    gallery: 'gallery-2012.03.23-18-00'
}).use("gallery-carousel", "gallery-carousel-anim", "substitute", function(Y) {
 
    var carousel = new Y.Carousel({ boundingBox: "#container",
            contentBox: "#container > ol" });
    carousel.plug(Y.CarouselAnimPlugin, { animation: { speed: 1, effect: Y.Easing.backIn } });
    carousel.render();
    setTimeout(function () {
        carousel.scrollPageForward();
    }, 2000);
 
});
 
**********-->