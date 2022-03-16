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
    <table id="test">
      <tr>
        <td id="test"><h2>This is a heading</h2></td>
        <td id="test"><p>This is a paragraph.</p></td>
        <td id="test"><p>This is another paragraph.</p></td>
        <button id="but1">Click me show</button>
        <button id="but2">Click me hide</button>
      </tr>
    </table>
  </div>    
</body>
</html>



</body>
</html>