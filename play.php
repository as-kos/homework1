<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Домашняя работа №3</title>
</head>

<?php
//Принимаем данные с предыдущей странички

if (isset($_GET['go']))
{
  $res = $_GET['go'];

  if ($res=='42'){
  $img='Sam.jpg';
  }elseif($res=='43'){
  $img='Sam2.jpg';
  }elseif($res=='44'){
  $img='Sam3.jpg';
  }elseif($res=='45'){
  $img='money_B.jpg';
  }
}

//Проверяем нажата ли кнопка назад
if (isset($_GET['back'])){
exit("<meta http-equiv='refresh' content='0; url=/gallery1.php'>");
}

?>

<body>



<!-- <h1>Фотогалерея</h1> -->
<form name="Form1" method="get" action="play.php" >
<!-- Рисуем кнопку "Назад" -->
<button type="submit" name="back" value="" ><b>НАЗАД</b></button>

<!-- Выводим выбранную картинку на весь экран width="100%" height="100%"  -->

<img src="images/<?php echo $img; ?>" alt="Картинка №<?php echo $img; ?>" width="100%"></img>


<!-- Выводим результат -->



 </form>
 </body>
 </html>

