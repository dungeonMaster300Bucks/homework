<!DOCTYPE HTML>
<html>
<body>
<script src="../bootstrap/js/jquery-3.6.0.min.js"></script>
<a href="http://wikipedia.ru">Википедия</a>
<ul>
 <li><a href="http://jquery.com">jQuery</a></li>
 <li><a href="http://sizzlejs.com">Sizzle</a></li>
 <li><a href="http://blog.jquery.com">jQuery Blog</li>
</ul>
<script>
 var links = $('li a'); // найти все ссылки на странице внутри LI
 links.each(function (i, a) {
 alert(i + ': ' + a.innerHTML);
 if (i == 1) return false; // стоп на элементе коллекции с индексом 1
 });
</script>
</body>
</html>
