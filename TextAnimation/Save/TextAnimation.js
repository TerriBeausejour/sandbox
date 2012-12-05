// JavaScript Document

var terms = ["term 1", "term 2", "term 3"]; //array of terms to rotate

$(document).ready(function() {
	
   $("a").click(function() {
     alert("Hello world!");
   });
   
alert ('In script TextAnimation');

function rotateTerm() {
	alert ('In Function rotateMe');
var ct = $("#rotate").data("term") || 0;
if (ct == 3) return;
$("#rotate").data("term", ct == terms.length -1 ? 0 : ct + 1).text(terms[ct])
  .fadeIn().delay(2000).fadeOut(200, rotateTerm);
}​

});