<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function () {
 $("button").click(function () {
 alert($("#w3s").attr("href"));
 });
 });
</script>
</head>
<body>
<p><a href="http://www.w3schools.com" id="w3s">W3Schools.com</a></p>
<button>Show href Value</button>
</body>
</html>