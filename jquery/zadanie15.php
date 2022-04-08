<!DOCTYPE html>
<html>
<head>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function () {
 $("button").click(function () {
 var links = $('li> a');
 // перебор результатов
 for (var i = 0; i < links.length; i++) {
 alert(links[i].href);
 }
 });
 });
</script>
</head>
<body>
<ul>
 <li><a href="http://jquery.com">jQuery</a></li>
 <li><a href="http://jqueryui.com">jQuery UI</a></li>
 <li><a href="http://blog.jquery.com">jQuery Blog</a></li>
</ul>
<button>Start query</button>
</body>
</html>