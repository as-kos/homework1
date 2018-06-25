<html>
<head>

        	<title>PHP-1</title>
</head>
<body>
		<h1>PHP</h1>
		<p>3 урок<br><br></p>
		<p><b><font color="BLUE">2. Создайте примитивную фотогалерею из двух страниц с массивом</font></b></p>

<?php

//заряжаем переменную - счетчик страниц
$count=0;

//заряжаем массив с именами картинок
$img = array('Sam.jpg', 'Sam2.jpg', 'Sam3.jpg', 'money_B.jpg');


//обрабатываем кнопки вперед назад
if (isset($_GET['ff']))
{
 if(($_GET['ff'])<3){
 $count=  $_GET['ff'] + 1;
 }else{
 $count=3;
 echo 'конец галереи';
 }
}

if (isset($_GET['rw']))
{
 if(($_GET['rw'])>0){
 $count=  $_GET['rw'] - 1;
 }else{
 $count=0;
 echo 'начало галереи';
 }
}

//обрабатываем кнопку выбора картинки
if (isset($_GET['go']))
{
$id = $_GET['go']; //присваиваем переменной значение счетчика с формы
exit("<meta http-equiv='refresh' content='0; url=/play0.php?id=".$id."'>"); //уходим на страницу полного просмотра картинки
}

?>

<h1>Фотогалерея</h1>
<form name="Form1" method="get" action="gallery0.php" >

<!-- Выводим кнопку перемотка назад -->
<button type="submit" name="rw" value=" <?php echo $count; ?> " > НАЗАД </button>

<!-- Выводим картинку превьюшку -->
<button type="submit" name="go" value="<?php echo $count; ?>" > <img src="./images/<?php echo $img[$count]; ?> " alt="Рисунок <?php echo $count;  ?> " width="50%" > </button>

<!-- Выводим кнопку перемотка вперед -->
<button type="submit" name="ff" value=" <?php echo $count; ?> ">ВПЕРЕД</button>

</form>
</body>
</html>