// JavaScript Document

// ****** YUI Slideshow Gallery ******* //
YUI({
     //Last Gallery Build of this module
   gallery: 'gallery-2010.05.21-18-16'
   
}).use("gallery-slideshow-animated", function(Y) {
    var manual_slideshow1 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow1'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow1.render();
	var manual_slideshow2 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow2'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow2.render();
    var manual_slideshow3 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow3'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow3.render();
	var manual_slideshow4 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow4'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow4.render();
	var manual_slideshow5 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow5'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow5.render();
	var manual_slideshow6 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow6'), { pause_time: 4, duration: 0.35, easing: Y.Easing.easeOut });
    manual_slideshow6.render();
//	var manual_slideshow7 = Y.SlideshowAnimated.auto_shows.horizontalSlideshow(Y.one('#man_slideshow7'), { pause_time: 4, duration: 2, easing: Y.Easing.easeNone });
//    manual_slideshow7.render();
});

