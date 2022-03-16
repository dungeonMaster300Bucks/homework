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
  <p><img src="" alt="Квадрат" width="20" height="20" 
  align="center"> This is a paragraph.</p>
  <p><img src="" alt="Квадрат" width="20" height="20" 
  align="center"> This is a paragraph.</p>
  <p><img src="" alt="Квадрат" width="20" height="20" 
  align="center"> This is a paragraph.</p>
        <button id="but1">Click me show</button>
        <button id="but2">Click me hide</button>
  </div>    
</body>
</html>