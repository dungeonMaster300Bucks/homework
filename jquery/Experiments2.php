<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="../bootstrap/js/jquery-3.6.0.min.js">
  </script>
  <script>
    $(document).ready(function () {
      $("#but1").click(function () {
        $("#test").hide();
      });
    $("#but2").click(function () {
      $("#test").show();
      });
    });
  </script>
</head>

<body>
  <div class="container"> 
    <div id="test">
      <h2 id="test"><a href="">This is a heading</a></h2>
      <p><a href="">This is a paragraph.</a></p>
      <p><a href="">This is another paragraph.</a></p>
    </div>
        <button id="but1">Click me show</button>
        <button id="but2">Click me hide</button>
  </div> 
</body>
</html>