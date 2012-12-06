// JavaScript Document

function setEventDecadeHeaderEffect(songBeg, songEnd) {
	setTimeout(function fadeMyEvents() {
		$(".MyEvents").fadeTo(500, 0);
		$(".MyDecadeSong").fadeTo(3200, 1);	
	}, songBeg);
	setTimeout(function fadeMyDecadeSong() {
		$(".MyDecadeSong").fadeTo(800, 0);	
		$(".MyEvents").fadeTo(3600, 1);
		galleryStop();
	}, songEnd);
}  

var timeToStop = false;
function galleryInit()	{  
	
	$( '.cycle-slideshow' ).on( 'cycle-paused', function( event, opts ) {
	  // your event handler code here
	  // argument opts is the slideshow's option hash
	 //alert("OPTS: " + options;
	});
	
	$( '.cycle-slideshow' ).on( 'cycle-stopped', function( event, opts ) {
	  // your event handler code here
	  // argument opts is the slideshow's option hash
	  alert("Event CYCLE STOPPED Triggered HERE")  
	 //alert("OPTS: " + options;
	});
	  
	//$( '.cycle-slideshow' ).on( 'cycle-after', function( event, opts ) {
	  // your event handler code here
	  // argument opts is the slideshow's option hash
	 // alert("Event CYCLE AFTER Triggered HERE");
	 // alert("Current Slide: " + opts.currSlide + " timeToStop: " + timeToStop);
	 //  if(timeToStop == true)
	 // {
	  //alert('Stopping SLIDESHOW!');
	//	 var startslide = opts.currSlide;
	//	
	 // }
      //opts.paused = true;
      //opts.API.trigger('cycle-paused');
	  //opts.API.stop();
	  //BAD DONT DO THIS, BLOWS AWAY CURR SLIDE
	  // $('#banner-slideshow').cycle('next');
	 // alert("OPTS: " + options;
	//});
} 
function galleryStart() {
	setTimeout(function() {	  
	//$('#banner-slideshow').cycle('next');
	},3200);
}

function galleryStop() {
	setTimeout(function() {	  
	  timeToStop = true;	
	  //$('.cycle-slideshow').cycle('pause');
	  $('.cycle-slideshow').cycle('pause');
	 /* $('.cycle-slideshow').cycle('destroy');
	  $('.cycle-slideshow').cycle({
		  timeout: 0,
		  speed: 43000,
		  fx: "scrollHorz",
		  delay: 0,
		  prev: "#cycle-prev",
		  next: "#cycle-next",
		  easing: "linear",
		  pauseOnHover: "true",
		  loader: "true",
		  progressive: "#images"
	  });
	*/
	//$('.cycle-slideshow').trigger('cycle-stopped');
	},1200);	
}
