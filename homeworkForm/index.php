<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework</title>
    <link rel="stylesheet" href="/homework/site/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                 <input type="text" name="firstname">
                <button type="submit" name="hello">кнопка</button>
            <?php
                if("name== ' firstname ' ")echo 'поле пустое';
                    elseif("name != firstname") echo 'ok';
            ?> 
            </form>
        </div>
    </div>
</body>
</html>