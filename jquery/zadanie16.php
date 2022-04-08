<!DOCTYPE HTML>
<html>
<body>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<ul>
 <li>
 <a href="http://jquery.com">jQuery</a>
 <ul>
 <li><a href="http://blog.jquery.com">jQuery Blog</a></li>
 </ul>
 </li>
 <li><a href="http://sizzlejs.com">Sizzle</a></li>
 </ul>
<script>
 var links = $('a', 'li');
 for (var i = 0; i < links.length; i++) {
 alert(i + ": " + links[i].href); // 3 ссылки по очереди
 }
</script>
</body>
</html>