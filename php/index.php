<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="zadanie">
        <h1>Задание 1</h1>
        Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
результат присвойте переменной $c. Затем создайте переменную $d,
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
в переменную $result. Выведите на экран значение переменной $result. 
    </div>
    <div class="otvet">
<?PHP 
$a=17;
$b=10;
$c=$a-$b;
$d=7;
$result=$c+$d;
?>
<h3>Ответ: <?=$result?></h3>
    </div>    
    <div class="zadanie">
        <h1>Задание 2</h1>
        Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат
присвойте переменной $result. Выведите на экран значение
переменной $result. 
    </div>
    <div class="otvet">
<?PHP 
$c=15;
$d=2;
$result=$c+$d;
?>
<h3>Ответ: <?=$result?></h3>
    </div>  
    <div class="zadanie">
        <h1>Задание 3</h1>
        Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
переменных и операции сложения строк выведите на экран фразу 'Привет,
Мир!'. 
    </div>
    <div class="otvet">
<?PHP 
$text1='Привет, ';
$text2='Мир! ';
$text2= $text1 . $text2

?>
<h3>Ответ: <?=$text2?></h3>
    </div> 
    <div class="zadanie">
        <h1>Задание 4</h1>
        Создайте переменную $name и присвойте ей ваше имя. Выведите на
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 
 
    </div>
    <div class="otvet">
<?PHP 
$name='Лев';
$n='Привет, ' . $name;
?>
<h3>Ответ: <?=$n?></h3>
    </div>  
    <div class="zadanie">
        <h1>Задание 5</h1>
        Создайте переменную $age и присвойте ей ваш возраст. Выведите на
экран 'Мне %Возраст% лет!'.  
    </div>
    <div class="otvet">
<?PHP 
$age=18;
$c= 'мне ' . $age . ' лет!'; 
?>
<h3>Ответ: <?=$c?></h3>
    </div>
    </div>  
    <div class="zadanie">
        <h1>Задание 6</h1>
        Если переменная $a равна 10, то выведите 'Верно', иначе выведите
'Неверно'.  
    </div>
    <div class="otvet">
<?PHP 
$a=10;
if($a<10){echo '<h3>Ответ:</h3> ' .$a. ' неверно';}
    else if ($a>10){echo '<h3>Ответ:</h3> ' .$a. ' неверно';}
    else if ($a==10){echo '<h3>Ответ:</h3> ' .$a. ' верно';}
?>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 7</h1>
        В переменной $min лежит число от 0 до 59. Определите в
какую четверть часа попадает это число (в первую, вторую, третью или
четвертую). 
    </div>
    <div class="otvet">
<?PHP 
$min=(rand(0,59));
    if ($min<15 and $min>0 ){
        echo '<h1>Ответ</h1> 1 четверть';}
    if ($min<30 and $min>15 ){
        echo '<h1>Ответ</h1>2 четверть';}
    if ($min<45 and $min>30 ){
        echo '<h1>Ответ</h1>3 четверть';}
    if ($min<59 and $min>45 ){
        echo '<h1>Ответ</h1>4 четверть';}
?>
    </div>
    </div>  
    <div class="zadanie">
        <h1>Задание 8</h1>
        Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
Если она имеет значение '1', то в переменную $result запишем 'зима', если
имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case. 
    </div>
    <div class="otvet">
<?PHP 
$num=(rand(1,4));
if ($num==1) {echo '<h1>Ответ</h1>' .$result='winter';}
if ($num==2) {echo '<h1>Ответ</h1>' .$result='summer';}
if ($num==3) {echo '<h1>Ответ</h1>' .$result='autumn';}
if ($num==4) {echo '<h1>Ответ</h1>' .$result='spring';}
?>
    </div>
    </div>  
    <div class="zadanie">
        <h1>Задание 9</h1>
        Дана строка с цифрами, например, '12345'. Проверьте, что первым
символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да',
в противном случае выведите 'нет'.  
    </div>
    <div class="otvet">
<?PHP 
$strp=(rand(1,20).rand(1,20).rand(1,20).rand(1,20).rand(1,20));
$res=($strp[0]==1||$strp[0]==2||$strp[0]==3)? 'yes' : 'No';
    echo $res;
?>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 10</h1>
        В переменной $year хранится год. Определите, является ли
он високосным (в таком году есть 29 февраля). Год будет високосным в двух
случаях: либо он делится на 4, но при этом не делится на 100, либо делится
на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они
делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они
делятся на 400. 
    </div>
    <div class="otvet">
<?PHP 
$year=(rand(1,9).rand(0,9).rand(0,9).rand(0,9));
if(($year % 4 ==0) and ($year % 100 != 0) or ($year % 400 == 0))
    echo '<h1>Ответ:</h1>'.'високосный год';
    else echo '<h1>Ответ:</h1>'. 'не високосный';
?>
<h3>год: <?=$year?></h3>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 11</h1>
        В переменной $month лежит какое-то число из интервала от 1 до 12.
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 
    </div>
    <div class="otvet">
<?PHP 
$month=(rand(1,12));
    if($month<2 or $month==12)echo '<h1>Ответ:</h1>'. 'winter';
    if($month>2 and $month<6)echo '<h1>Ответ:</h1>'. 'spring';
    if($month>5 and $month<9)echo '<h1>Ответ:</h1>'. 'summer';
    if($month>8 and $month<11)echo '<h1>Ответ:</h1>'. 'autumn';
?>
<h3>месяц/12: <?=$month?></h3>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 12</h1>
        Выведите столбец чисел от 1 до 100.  
    </div>
    <div class="otvet">
<?PHP 
$a=0;
while ($a<100) echo ($a=$a+1 . '<br>' );

?>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 13</h1>
        Выведите столбец чисел от 11 до 33. 
    </div>
    <div class="otvet">
<?PHP 
$a=10;
while ($a<33) echo ($a=$a+1 . '<br>' );
?>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 14</h1>
        Выведите столбец четных чисел в промежутке от 0 до 100. 
    </div>
    <div class="otvet">
<?PHP 
$a=0;
while ($a<100 and ($a % 2 == 0))  echo ($a=$a+2 . '<br>');
?>
    </div>  
    </div>  
    <div class="zadanie">
        <h1>Задание 15</h1>
        С помощью цикла найдите сумму чисел от 1 до 100.
    </div>
    <div class="otvet">
<?PHP 
$sum=0;
$i=1;

do{
    $sum=$sum+$i;
    $i++;
}
While($i<=100);
echo '<h1>Ответ</h1>'. $sum;
?>
 <div class="zadanie">
        <h1>Задание 1 Ч.2</h1>
        Задача 1.
Создайте переменные $a, $b и присвойте им положительные
числа. Присвойте частное от деления $a/$b третьей переменной $d.
Используя условный оператор if, осуществите схему вывода на экран
значения переменной $d только в том случае, если оно является
положительным числом. Проверьте работу скрипта, после чего
измените одно из значений переменных на отрицательное число и
снова запустите скрипт.
    </div>
    <div class="otvet">
<?PHP 
$a=1;
$b=2;
$d=$a/$b;
if($d>0) echo '<h1>Ответ:</h1>' . $d;
?>
<div class="zadanie">
        <h1>Задание 2 Ч.2</h1>
        Задача 2.
Создайте переменные $a, $b и присвойте им положительные
числа. Присвойте частное от деления $a/$b третьей переменной $d.
Используя условный оператор if, осуществите схему вывода на экран
значения переменной $d только в том случае, если оно является
положительным числом. Если число окажется отрицательным или
равным нулю, должно выводиться соответствующее предупреждение, а
не значение переменной. Проверьте работу скрипта, после чего
измените одно из значений переменных $a или $b на отрицательное
число и снова запустите скрипт. 

    </div>
    <div class="otvet">
<?PHP 
$a=0;
$b=2;
$d=$a/$b;
if($d>0) echo '<h1>Ответ:</h1>' . $d;
if($d==0 or $d<0)echo '<h1>Ответ:</h1>'.'Отрицательное или равное нулю :' . $d;
?>
<div class="zadanie">
        <h1>Задание 3 Ч.2</h1>
        Создайте переменные $a, $b и присвойте им положительные
числа. Присвойте частное от деления $a/$b третьей переменной $d.
Используя условный оператор if в связке с else if, осуществите схему
вывода на экран значения переменной $d только в том случае, если оно
является положительным числом. Если число окажется отрицательным
или равным нулю, то для каждого случая должно выводиться
соответствующее предупреждение. Проверьте работу скрипта, после 
чего измените одно из значений переменных $a или $b на
отрицательное число и запустите скрипт снова. Чтобы проверить
работу скрипта для нулевого значения, измените значение
переменной $a на ноль. 
    </div>
    <div class="otvet">
<?PHP 
$a=0;
$b=2;
$d=$a/$b;
if($d>0) echo '<h1>Ответ:</h1>' . $d;
 else if($d==0 or $d<0)echo '<h1>Ответ:</h1>'.'Отрицательное или равное нулю :' . $d;
?>
<div class="zadanie">
        <h1>Задание 4 Ч.2</h1>
        Создайте переменную и присвойте ей массив, состоящий из пяти
элементов, например, чисел или строк. Создайте еще одну
переменную, которой присвойте какое-нибудь значение. Теперь
создайте конструкцию switch, которая будет определять, есть такой
элемент в массиве или нет и выводить соответствующее сообщение.
Для упрощения кода используйте операторы case, идущие друг за
другом и содержащие метки в виде значений элементов массива, но не
прерывающиеся операторами break. Не забудьте про условие по
умолчанию, которое будет выводить сообщение, если элемента в
массиве нет. Протестируйте конструкцию, присваивая второй
переменной различные значения.
    </div>
    <div class="otvet">
<?PHP 
$arr=array(0,1,2,3,4);
$a=$arr;
switch($a){
    case 0:
        echo "a равно 0";
        break;
    case 1:
        echo "a равно 1";
        break;
    case 2:
        echo "a равно 2";
        break;
    case 3:
        echo "a равно 3";
        break;
    case 4:
        echo "a равно 4";
        default:
        break;
}
?>
<div class="zadanie">
        <h1>Задание 5 Ч.2</h1>
        Используйте цикл for для вывода на экран целых положительных
чисел не превышающих 50. Прервите цикл на 10 итерации при помощи
внутреннего условного оператора if и оператора break. 
    </div>
    <div class="otvet">
<?PHP 
$a=0;

for ($a=0;$a <=50;$a++){
    echo $a . '<br>';
    if($a==9){
        break;
       };
   
}
   
?>
<h1>Задание 1 Ч.3</h1>
Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент
массива на второй, а третий элемент на четвертый. Результаты сложите,
присвойте переменной $result. Выведите на экран значение этой переменной.       
    </div>
    <div class="otvet">
<?PHP
$arr=array(2,5,3,9);
$a=$arr[0]*$arr[1] ;
$b=$arr[2]*$arr[3] ;  
$result=$a+$b;
?>
<h3>Ответ: <?=$result?></h3>
<h1>Задание 2 Ч.3</h1>
Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто
заполните его присваиванием $arr[] = новое значение. Для выполнения задачи
необходимо использовать цикл.      
        </div>
        <div class="otvet">
<?PHP 
$arr[]=1;
$arr[]=2;
$arr[]=3;
$arr[]=4;
$arr[]=5;
print_r($arr);
foreach($arr as $key=> $arr)  {
    echo $key . '=' . $arr . '<br>';
}
?>
<h1>Задание 3 Ч.3</h1>
Пусть теперь в переменной $lang хранится язык (она принимает одно из
значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня.
Выведите словом день недели, соответствующий переменным $lang и $day. То
есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.        
        </div>
        <div class="otvet">
    <?PHP 
    
       
    ?>
<h1>Задание 4 Ч.3</h1>
$ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия"
=> "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки",
"Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна",
"Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин",
"Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" =>
"Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон",
"Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага",
"Эстония"=>"Таллин"," Польша "=>"Варшава");
Создайте сценарий PHP, который отображает столицу и название страны из
указанного выше массива $ceu. Отсортируйте список по названиям столиц.
Пример вывода: 
Страна Нидерланды - столица Амстердам
Страна Греция - столица Афины
Страна Германии - столица Берлин       
        </div>
        <div class="otvet">
    <?PHP 
    
       
    ?>
<h1>Задание 5 Ч.3</h1>
$color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный');
Напишите сценарий PHP, чтобы получить первый элемент указанного выше
массива. Представим, что ключ вам заранее не известен.         
        </div>
        <div class="otvet">
    <?PHP 
    
       
    ?>
<h1>Задание 6 Ч.3</h1>
Напишите сценарий PHP для сортировки следующего ассоциативного
массива:
array ("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40")
а) сортировка по возрастанию по значению
б) по возрастанию сортировка по ключу
в) сортировка по убыванию по значению
г) сортировка по убыванию по ключу
Для выполнения задачи ознакомьтесь с функциями asort, ksort, arsort, krsort        
        </div>
        <div class="otvet">
    <?PHP 
    
       
    ?>
<h1>Задание 7 Ч.3</h1>
Напишите сценарий PHP, который отображает все числа от 200 до 250,
делящиеся на 4.
Примечание. Не используйте управляющие операторы PHP.
Ожидаемый результат:
200,204,208,212,216,220,224,228,232,236,240,244,248         
        </div>
        <div class="otvet">
    <?PHP 
    
       
    ?>

</div>  
    </div>  
</body>
</html>
