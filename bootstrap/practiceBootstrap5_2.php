<?php
require "inc/header.php";
?>

<div class="container"> 
<div class="row"> 
  <div class="col-md-4"> 
    <div class="input-group input-group-lg"> 
      <span class="input-group-addon">E-mail</span> 
      <input type="text" class="form-control"> 
    </div> 
  </div> 
    <div class="col-md-4"> 
    <div class="input-group"> 
      <input type="text" class="form-control"> 
      <span class="input-group-addon">@</span>
      </div> 
  </div> 
    <div class="col-md-4"> 
    <div class="input-group input-group-sm"> 
      <span class="input-group-addon">E-mail</span> 
      <input type="text" class="form-control"> 
      <span class="input-group-addon">@</span> 
    </div> 
  </div> 
</div>     
    <div class="row"> 
    <div class="col-md-6"> 
          <div class="input-group"> 
            <span class="input-group-addon"> 
            <input type="checkbox"> 
            </span> 
            <input type="text" class="form-control"> 
        </div> 
        </div> 
        <div class="col-md-6"> 
          <div class="input-group"> 
            <span class="input-group-addon"> 
            <input type="radio"> 
            </span> 
            <input type="text" class="form-control"> 
        </div> 
        </div> 
    </div> 
<div class="row"> 
  <div class="col-md-6"> 
    <div class="input-group"> 
      <span class="input-group-btn"> 
      <button class="btn btn-default" 
type="button">Кнопка</button> 
      </span> 
      <input type="text" class="form-control"> 
    </div> 
  </div> 
    <div class="col-md-6"> 
    <div class="input-group"> 
            <div class="input-group-btn"> 
              <button type="button" class="btn btn-default dropdown-toggle" 
data-toggle="dropdown"> 
                                                  Действие <span class="caret"></span></button> 
              <ul class="dropdown-menu" role="menu"> 
                         <li><a href="#">Действие</a></li><li 
class="divider"></li><li><a href="#">Другое </a></li> 
              </ul> 
            </div> 
           <input type="text" class="form-control"> 
        </div> 
  </div> 
</div>  
</div> 

<?php
require "inc/footer.php";
?>