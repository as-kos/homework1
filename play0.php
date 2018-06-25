<html>
<head>
<title>Домашняя работа №3</title>
</head>

<?php
//заряжаем массив с именами картинок
$img = array('Sam.jpg', 'Sam2.jpg', 'Sam3.jpg', 'money_B.jpg');

//Принимаем данные с предыдущей странички
if (isset($_GET['id']))
{
  $res = $_GET['id'];
} 

//Проверяем нажата ли кнопка назад
if (isset($_GET['back'])){
exit("<meta http-equiv='refresh' content='0; url=/gallery0.php'>");
}

?>

<body>



<!-- <h1>Фотогалерея</h1> -->
<form name="Form1" method="get" action="play0.php" >

<!-- Рисуем кнопку "Назад" -->
<button type="submit" name="back" value="" ><b>НАЗАД</b></button>

<!-- Выводим выбранную картинку на весь экран width="100%" height="100%"  -->

<img src="images/<?php echo $img[$res]; ?>" alt="Картинка №<?php echo $img[$res]; ?>" width="100%"></img>


<!-- Выводим результат -->



 </form>
 </body>
 </html>

