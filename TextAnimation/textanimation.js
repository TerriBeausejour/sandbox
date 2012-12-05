// JavaScript Document

$(document).ready(function() {
	
   $("a").click(function() {
     alert("Hello world!");
   });
   

    var terms = ["span_aaa", "span_bbb", "span_ccc", "span_ddd", "span_eee", "span_fff"]; //array of terms to rotate

    function rotateTerm() {
		
        var ct = $("#text-content").data("term") || 0;

        $("#text-content").data("term", ct == terms.length -1 ? 0 : ct + 1).text($('#text-slider .'+terms[ct]).html()+ct)
                .fadeIn().delay(2000).fadeOut(200);

        $("#title-content").text($('#title-slider .'+terms[ct]).html()+ct)
                .fadeIn().delay(2000).fadeOut(200, rotateTerm);
    }
    //$(rotateTerm); //start it on document.ready
	
	var decadesong = ["decade", "song"];
	function rotateDecadeSong() {
        var ct = $("#decade-content").data("term") || 0;
        $("#decade-content")
		  .data("term", ct == decadesong.length -1 ? 0 : ct + 1)
		  .text($('#decade-slider .'+decadesong[ct])
		  .html())
		  .fadeIn().delay(2000)
		  .fadeOut(600, rotateDecadeSong);
    }
    $(rotateDecadeSong); //start it on document.ready
	
	function swapText1() {
		$(".Text1").fadeTo(6000, 0);
		$(".Text2").fadeTo(6000, 1, swapText2);	
	}
	function swapText2() {
		$(".Text1").fadeTo(6000, 1);
		$(".Text2").fadeTo(6000, 0, swapText1);	
	}
	$(swapText1); 

});


/*
NOTES
$("#id1").html('<p> text </p>');     // Set HTML data
Set the text as plain text
var data = $("#id1").html();
$("#id1").text(data);
<p> is treated as plain text instead of HTML elemnt
*/