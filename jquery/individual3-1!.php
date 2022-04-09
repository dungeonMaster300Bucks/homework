<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
 $(document).ready(function () {
 $("#btn1").click(function () {
    $("#div1").show(2000);
    $("#div3").show(2000);
    $("#div1").fadeOut(2000);
    $("#div3").fadeOut(2000);
 });
 $("#btn2").click(function () {
   
    $("#div1").show();
    $("#div3").show();
 });
 });
</script>
</head>
<body>

<button id="btn1">start</button>
<button id="btn2">stop</button>
<br><br>
<div id="div1" hidden style="width:80px;height:80px;background-color:red;"></div><br>
<div id="div3" hidden style="width:80px;height:80px;background-color:blue;"></div>
</body>
</html>