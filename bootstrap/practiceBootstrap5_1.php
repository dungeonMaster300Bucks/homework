<?php
require "inc/header.php";
?>

<div class="btn-toolbar"> 
     <div class="btn-group btn-group-lg"> 
           <button type="button" class="btn btn-default">lg</button> 
           <button type="button" class="btn btn-default">lg</button> 
     </div> 
     <div class="btn-group"> 
            <button type="button" class="btn btn-default">btn</button> 
            <button type="button" class="btn btn-default">btn</button> 
     </div> 
     <div class="btn-group btn-group-sm"> 
            <button type="button" class="btn btn-default">sm</button> 
            <button type="button" class="btn btn-default">sm</button> 
     </div> 
     <div class="btn-group btn-group-xs"> 
            <button type="button" class="btn btn-default">xs</button> 
            <button type="button" class="btn btn-default">xs</button> 
     </div> 
</div><br> 
<div class="btn-group-vertical"> 
            <button type="button" class="btn btn-default">1</button> 
            <button type="button" class="btn btn-default">2</button> 
            <div class="btn-group"> 
                   <button type="button" class="btn btn-default dropdown-toggle" data-
toggle="dropdown"> 
                     Меню <span class="caret"></span> 
                   </button> 
                   <ul class="dropdown-menu" role="menu"> 
                          <li><a href="#">Пункт 1</a></li> 
                          <li><a href="#">Пункт 2</a></li> 
                   </ul> 
            </div> 
     </div><br><br> 
     <div class="btn-group btn-group-justified"> 
            <div class="btn-group"> 
                   <button type="button" class="btn btn-default">Первая</button> 
            </div> 
            <div class="btn-group"> 
                   <button type="button" class="btn btn-default">Вторая</button> 
            </div> 
            <div class="btn-group"> 
                   <button type="button" class="btn btn-default">Третья</button> 
            </div> 
     </div> 

<?php
require "inc/footer.php";
?>