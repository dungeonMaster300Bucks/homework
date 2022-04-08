<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
 $(document).ready(function () {
 $("p").dblclick(function () {
 $(this).hide();
 });
 });
</script>
</head>
<body>
<p>If you double-click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
</body>
</html>