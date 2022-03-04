<?php
require "inc/header.php";
?>

<div class="container"> 
  <div class="row"> 
    <div class="col-md-6"> 
      <ul class="list-group"> 
        <li class="list-group-item">Первый пункт</li> 
        <a href="#" class="list-group-item active"> 
        Второй пункт</a> 
        <li class="list-group-item disabled">Третий пункт</li> 
        <li class="list-group-item active"> 
       <h4 class="list-group-item-heading">Заголовок
пункта списка</h4> 
       <p class="list-group-item-text">Описание
четвёртого пункта списка</p> 
        </li> 
      </ul> 
    </div> 
    <div class="col-md-6"> 
      <ul class="list-group"> 
          <li class="list-group-item list-group-item-success">.list-
group-item-success</li> 
          <li class="list-group-item list-group-item-info">.list-group-
item-info</li> 
          <li class="list-group-item list-group-item-warning">.list-
group-item-warning</li> 
          <li class="list-group-item list-group-item-danger">.list-
group-item-danger</li> 
      </ul> 
      </div> 
</div> 
</div>

<?php
require "inc/footer.php";
?>