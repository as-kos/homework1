<?php
$lines = file(__DIR__ . '/test.txt'); //читаем файл в массив
// var_dump($lines); //выводит array(3) { [0]=> string(64) "Иванов Петр Викторович, Ярославль " [1]=> string(64) "Петров Иван Александрович, Ростов " [2]=> string(65) "Федорова Галина Павловна, Кострома." }

$patch = __DIR__ . '/test.txt'; //путь к файлу, это будет передаваемое в функцию значение

function filetoarray($x)
{
    $lines = file($x); //читаем файл в массив
    return $lines; //возвращаем массив строк
}

?>

<html>
<head>
    <title>PHP-1</title>
</head>

<body>
<p>4 урок</p>
<p><h1>Гостевая книга</h1><br><br></p>

<table border="1">
    <tr align="center">
        <th>ФИО</th>
        <th>Адрес</th>
        <th>Телефон</th>
    </tr>


    <?php
      foreach (filetoarray($patch) as $li){  // перебираем массив, который получили из файла по указанному пути
      $element = explode(",", $li); // перебираем строки массива, разбивая их на подстроки, по разделителю - запятой
      ?>
        <tr align="center">     <!-- выводим данные в таблицу- глстевую книгу -->
          <td><?php echo $element[0]; ?></td>
          <td><?php echo $element[1]; ?></td>
          <td><?php echo $element[2]; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<form name="Form1" method="post" action="match.php" >
    <br>
    <p><b>Добавьте записьв гостевую книгу:</b></p>
    Укажите свое ФИО: <input type="text" name="fio" value=""><br>
    Укажите город проживания: <input type="text" name="sity" value=""><br>
    Укажите контактный телефон: <input type="text" name="phone" value=""><br><br>
    <button type=submit name="go" value="go">Записать</button><br><br>

</form>

</body>
</html>
