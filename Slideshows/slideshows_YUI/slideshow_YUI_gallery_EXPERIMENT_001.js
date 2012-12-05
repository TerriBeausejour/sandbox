// JavaScript Document

// ****** YUI Slideshow Gallery ******* //
YUI({
     //Last Gallery Build of this module
   gallery: 'gallery-2010.05.21-18-16'
   
}).use("gallery-slideshow-animated", function(Y) {
    var manual_slideshow1 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow1'), { pause_time: 4, duration: 56.0, easing: Y.Easing.easeNone });
    manual_slideshow1.render();
});

