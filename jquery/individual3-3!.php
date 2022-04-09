<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
 $(document).ready(function () {
     var arr=['div1''div2''div3''div4''div5''div6''div7''div8''div9''div10']
 $("#btn").click(function () {
   $.each(arr,(index,value))
   if (value === even){
    $.show(2000)
   }
   
 });
 });
</script>
</head>
<body>

<button id="btn">start</button>
<p id="div1" hidden >1</p><br>
<p id="div2" hidden >2</p><br>
<p id="div3" hidden >3<br>
<p id="div4" hidden >4<br>
<p id="div5" hidden >5<br>
<p id="div6" hidden >6</p><br>
<p id="div7" hidden >7</p><br>
<p id="div8" hidden >8<br>
<p id="div9" hidden >9<br>
<p id="div10" hidden >10<br>
</body>
</html>