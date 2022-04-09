<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
    
 $(document).ready(function () {
    function divRandom (){ 
            var arr = ["div1","div2","div3","div4","div5"];
            var rand = Math.floor(Math.random() * arr.length);
 $("#btn1").click(function () {
    $("#div1,#div2,#div3,#div4,#div5").show(rand);
 });
 $("#btn2").click(function () {
   
    $("#div1").hide(300);
    $("#div2").hide(300);
    $("#div3").hide(300);
    $("#div4").hide(300);
    $("#div5").hide(300);
   
 });
 });
</script>
</head>
<body>
<button id="btn1">start</button>
<button id="btn2">stop</button>
<br><br>
<div id="div1" hidden >1</div><br>
<div id="div2" hidden >2</div><br>
<div id="div3" hidden >3<br>
<div id="div4" hidden >4<br>
<div id="div5" hidden >5<br>
</body>
</html>