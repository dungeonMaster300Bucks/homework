<!DOCTYPE html>
<html>

<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>

$(document).ready(function ()
 {
   $("#but1").click(function () 
     {
       $(".MsoNormal:odd").hide();
     });
   $("#but2").click(function ()
     {
       $(".MsoNormal:odd").show();
     });
 });
</script>

</head>
<body>

<button id="but1">Click me</button>
<button id="but2">Click me for show</button>
<p class="MsoNormal">0</p>
<p class="MsoNormal">1</p>
<p class="MsoNormal">2</p>



</body>
</html>