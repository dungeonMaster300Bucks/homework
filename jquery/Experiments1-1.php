<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<style> 
        .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12,.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7,.col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12,.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 
      { 
      background-color:#FF8000; 
      border:1px solid black; 
      font-weight:bold; 
      color:green; 
      height:auto; 
      } 
       </style>
<script src="../bootstrap/js/jquery-3.6.0.min.js">
</script>
<script>

$(document).ready(function ()
 {
   $("#but1").click(function () 
     {
       $("td:odd").hide();
     });
   $("#but2").click(function ()
     {
       $("td:odd").show();
     });
 });
</script>

</head>
<body>
  <div class="container col-md-12">
    <table>
      <button id="but1" class="btn-danger">Click me</button>
      <button id="but2" class="btn-danger">Click me for show</button>
      <td class="h2">0</td>
      <td class="h2">1</td>
      <td class="h2">2</td>
    </table>
  </div>


</body>
</html>