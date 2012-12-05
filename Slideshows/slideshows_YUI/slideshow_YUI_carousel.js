// JavaScript Document

// ********* YUI Slideshow Carousel *******//

YUI().use('node', 'event', 'carousel', 'animation', 'transition', function (Y) {
  
  YAHOO.util.Event.onContentReady("Banner_Image", function (ev) {
	  
	 var carousel = new YAHOO.widget.Carousel("Banner_Image",
	  	{	
	  			autoPlayInterval: 1000,
				isCircular: true,
				animation: {
		    	speed: 72.0,
				effect: YAHOO.util.Easing.easeNone
				},
				numVisible: 1
	  	});
		carousel.render();
		carousel.startAutoPlay();
	});
});


