<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Text Animation</title>
<link href="TextAnimation.css" rel="stylesheet" type="text/css">
<script src="../../jquery/jquery-1.8.3.js" type="text/javascript"></script>
<script src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"></script>
<script src="../../Save/sandbox.js"></script>
<script src="TextAnimation.js"></script>
<script>
  function TestMe() {
  alert('Hello World');
   $("visible").addClass("hidden");
  };
</script>
</head>

<div><h1 class="fade">THIS TEXT WILL FADE</h1></div>
<img src="http://bavotasan.com/wp-content/uploads/2011/09/fadeimage.jpg" alt="" width="200" height="150" class="fade" />
<h3>The Image Above will Fade on Hover!</h3>
 
 <ul class="nav-fade">
   <li>Menu1</li>
   <li>Menu2</li>
   <li>Menu3</li>
</ul>
 
 <div>
<form>
<input type="button" value="200 wpm" onclick="rotateTerm()" />
</form>
<p><span id="rotate"></span></p>​
</div>
 
 <a href=""><h1>Link</h1></a>
 
<div><h1 class="visible">THIS TEXT WILL ANIMATE</h1></div>
<button type="button" onclick="TestMe()">Click Me!</button>
</div>
</body>
</html>

