<?php
require "inc/header.php";
?>
    <div class="container ">
        <div class="col-md-4">    
            <ul class="nav nav-tabs " role="tablist"> 
                <li class="active"><a href="#">Первая</a></li> 
                <li><a href="#">Вторая</a></li> 
                <li class="disabled" ><a href="#">Третья</a></li> 
            </ul> 
        </div>
        <div class="col-md-4">
            <ul class="nav nav-pills" role="tablist"> 
                <li class="active"><a href="#">Первая</a></li> 
                <li><a href="#">Вторая</a></li> 
                <li class="disabled"><a href="#">Третья</a></li> 
            </ul> 
        </div>
        <div class="col-md-4">
        <ul class="nav nav-pills" role="tablist"> 
                <li class="active"><a href="#">Первая</a></li> 
                <li><a href="#">Вторая</a></li> 
                    <div class="dropdown"> 
                        <button class="btn btn-default" type="button" data-toggle="dropdown">Третья 
                            <span class="caret"></span> 
                        </button> 
                            <ul class="dropdown-menu"> 
                                <li class="dropdown-header">Первое меню</li> 
                                <li><a href="#">Пункт первого меню 1</a></li> 
                                <li><a href="#">Пункт первого меню 2</a></li> 
                                <li class="divider"></li> 
                                <li class="dropdown-header">Второе меню</li> 
                                <li class="disabled"><a href="#">Пункт второго меню 1</a></li> 
                            </ul> 
                    </div>

            </ul>
        </div>
    </div>
<?php
require "inc/footer.php";
?>