<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function () {
 $("#btn1").click(function () {
 alert("Text: " + $("#test").text());
 });
 $("#btn2").click(function () {
 alert("HTML: " + $("#test").html());
 });
 });
</script>
</head>
<body>
<p id="test">This is some <b>bold</b> text in a paragraph.</p>
<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button>
</body>
</html>