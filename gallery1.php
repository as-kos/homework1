<html>
<head>

        	<title>PHP-1</title>
</head>
<body>
		<h1>PHP</h1>
		<p>3 урок<br><br></p>
		<p><b><font color="BLUE">2. Создайте примитивную фотогалерею из двух страниц</font></b></p>
		
		
<h1>Фотогалерея</h1>
<form name="Form1" method="get" action="play.php" >

<!-- Создаем превьюшки, в таблице выводим рисунки на кнопках -->
<table border = "1">

<tr align="center">
<td><button type="submit" name="go" value="42" ><img src="./images/Sam.jpg" alt="Рисунок 1"> </button></td>
<td><button type="submit" name="go" value="43" ><img src="./images/Sam2.jpg" alt="Рисунок 2"> </button></td>
</tr>

<tr align="center">
<td><button type="submit" name="go" value="44" ><img src="./images/Sam3.jpg" alt="Рисунок 3"></button></td>
<td><button type="submit" name="go" value="45" ><img src="./images/money_B.jpg" alt="Рисунок 4"> </button></td>
</tr>


</table>




</form>
</body>
</html>