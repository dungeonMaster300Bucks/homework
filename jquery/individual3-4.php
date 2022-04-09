<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
 $(document).ready(function () {
 $("#btn").click(function () {
    $("#div1").show(2000);
    $("#div2").show(2000);
    $("#div3").show(2000);
    $("#div4").show(2000);
    $("#div5").show(2000);
    $("#div1").hide(2000);
    $("#div2").hide(2000);
    $("#div3").hide(2000);
    $("#div4").hide(2000);
    $("#div5").hide(2000);
   
 });

 });
</script>
</head>
<body>

<button id="btn">start</button>
<div id="div1" hidden style="width:40px;height:40px;background-color:red;"></div>
<div id="div2" hidden style="width:40px;height:40px;background-color:blue;"></div>
<div id="div3" hidden style="width:40px;height:40px;background-color:yellow;"></div>
<div id="div4" hidden style="width:40px;height:40px;background-color:green;"></div>
<div id="div5" hidden style="width:40px;height:40px;background-color:pink;"></div>
</body>
</html>