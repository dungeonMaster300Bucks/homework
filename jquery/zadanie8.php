<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>
 $(document).ready(function () {
 $("input").focus(function () {
 $(this).css("background-color", "#cccccc");
 });
 $("input").blur(function () {
 $(this).css("background-color", "#ffffff");
 });
 });
</script>
</head>
<body>
Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email">
</body>
</html>
