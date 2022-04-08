<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function () {
 $("button").click(function () {
 alert("Value: " + $("#test").val());
 });
 });
</script>
</head>
<body>
<p>Name: <input type="text" id="test" value="Mickey Mouse"></p>
<button>Show Value</button>
</body>
</html>