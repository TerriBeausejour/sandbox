<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Text Animation</title>
<link href="textanimation.css" rel="stylesheet" type="text/css">
<!--<script src="../jquery/jquery-1.8.3.js" type="text/javascript"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"></script>
<script src="textanimation.js"></script>
<script>
  function TestMe() {
  alert('Hello World');
   $("visible").addClass("hidden");
  };
</script>
</head>

<div><h1 class="fade">THIS TEXT WILL FADE</h1></div>

<div>
<img src="http://bavotasan.com/wp-content/uploads/2011/09/fadeimage.jpg" alt="" width="200" height="150" class="fade" />
<h3>The Image Above will Fade on Hover!</h3>
 
 <ul class="nav-fade">
   <li>Menu1</li>
   <li>Menu2</li>
   <li>Menu3</li>
 </ul>
</div>

<a href=""><h1>Link</h1></a>
 
<div><h1 class="objblink">THIS TEXT WILL ANIMATE</h1></div>
<button type="button" onclick="TestMe()">Click Me!</button>
</div>

<!--Swapping in / out TEXT-->

<div id="hidden-content" style="display:none;">
    <div id="text-slider">
        <span class="span_aaa">aaaaaaa</span>
        <span class="span_bbb">bbbbbbbbbbbbbbbb</span>
        <span class="span_ccc">ccc</span>
        <span class="span_ddd">ddddddd</span>
        <span class="span_eee">eeeeeee</span>
        <span class="span_fff">fff fff fffffff</span>
    </div>

    <div id="title-slider">
        <span class="span_aaa">aaa title</span>
        <span class="span_bbb">bbb title</span>
        <span class="span_ccc">ccc title</span>
        <span class="span_ddd">ddd title</span>
        <span class="span_eee">eee title</span>
        <span class="span_fff">fff title</span>
    </div>

</div>

<div id="title-content">

</div>

<div id="text-content">

</div>​

<div id="hidden-decadesong-content" style="display:none;">
    <div id="decade-slider">
        <span class="decade">My Life Events 1990-1999</span>
        <span class="song">Jesus Jones - Right Here Right Now</span>
    </div>
</div>

<h3>Decade - Song Rotation Test:</h3>
<div id="decade-content">

</div>​ 

<span class="italic">This text is italic</span>


<div class="swapMe">
<h1 class="swap1" style="position: absolute;">My Life Events 1990-1999</h1>
<h1 class="swap2">Jesus Jones - Right Here Right Now</h1>
</div>

<div class="swapMe">
<h1 class="Text1" style="position: absolute;">My Life Events 1990-1999</h1>
<h1 class="Text2" style="position: absolute;">Jesus Jones - Right Here Right Now</h1>
</div>

</body>
</html>

