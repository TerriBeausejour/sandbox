// JavaScript Document
// sandbox.js

$(document).ready(function() {
	
	YUI().use('event', 'node', function (Y) {
	  var mainNode = Y.one('#main'),
		  pressMeButtonNode = mainNode ? mainNode.one('#pressMeButton') : null;
	  
	  if (pressMeButtonNode) {
		  pressMeButtonNode.on('click', function (eventFacade) {
			  if (mainNode) {
				  mainNode.setContent('<p>Thank you!</p>');
			  }
		  });
	  }
	});
	
	$("a").click(function() {
     alert("Hello world!");
   });
   
});
