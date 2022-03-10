<?php
require "inc/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="alert alert-success">Успех</div>
            </div>
            <div class="col-md-2 col-md-offset-1">
                <div class="alert alert-info ">Информация</div> 
            </div>   
            <div class="col-md-2 col-md-offset-1">    
                <div class="alert alert-warning ">Предупреждение</div> 
            </div> 
            <div class="col-md-2 col-md-offset-1">    
                <div class="alert alert-danger ">Опасность</div>  
            </div> 
            
            <div class="row">          
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar  " aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> Завершено на 60% </div>
                    </div>
                </div>
            </div>  
            
            <div class="row ">
                <div class="col-md-12"></div>
            </div>          
                
            <div class="row">  
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar progress-bar-striped progress-bar-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar progress-bar-striped progress-bar-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div> 
            
    </div>
    
<?php
require "inc/footer.php";
?>