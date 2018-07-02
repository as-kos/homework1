<html>
<head>
    <title>HW4</title>
</head>
<body>
<p>4 урок<br><br></p>

<?php

//заряжаем переменную - счетчик страниц
$count = 0;
//заряжаем переменную - путь до каталога с картинками
$patch=__DIR__ . '/images/';
//заряжаем массив с именами картинок
$list = scandir($patch); //сканируем каталог картинками, названия загружаем в массив
$list = array_diff($list, ['.', '..']); // убираем "лишнее" символы

foreach ($list as $key) { //переносим в массив, чтобы индексация шла с 0
    $img[] = $key;
    $i++; // заодно подсчитываем количество файлов-элементов массива
}
$i--; //Отсчет начинается с 0, уменьшаем счетчик на 1

//обрабатываем кнопки вперед назад
if (isset($_POST['ff'])) {
    if (($_POST['ff']) < $i) {
        $count = $_POST['ff'] + 1;
    } else {
        $count = $i;
        echo 'конец галереи';
    }
}

if (isset($_POST['rw'])) {
    if (($_POST['rw']) > 0) {
        $count = $_POST['rw'] - 1;
    } else {
        $count = 0;
        echo 'начало галереи';
    }
}
//обрабатываем загрузку файла-фотослайда
if ( isset($_FILES['myimg']) ){
    if (0 == $_FILES['myimg']['error']) {  // ошибки отсутсвуют?
// Копируем файл из каталога для временного хранения файлов и заменяем тем  именем файла, что он имел на компьютере пользователя:
        if (copy($_FILES['myimg']['tmp_name'], $patch.basename($_FILES['myimg']['name'])))
        {
            echo 'Файл успешно загружен на сервер';
        }
        else{
            echo 'Ошибка при загрузке!';
        }
    }
}


?>

<h1>Фотогалерея</h1>



<form name="Form1" method="post" action="/gallery42.php" enctype="multipart/form-data">
    <p>Загрузите свое фото в галерею:</p>
    <input type="file" name="myimg" accept="image/png,image/jpeg"> <!-- ограничиваем выбор загружаемых файлов Jpeg и png -->
    <input type="submit" value="Отправить"></p>

        <!-- Выводим кнопку перемотка назад -->
        <button type="submit" name="rw" value=" <?php echo $count; ?> "> НАЗАД</button>

        <!-- Выводим картинку превьюшку -->
        <img src="./images/<?php echo $img[$count]; ?> " alt="Рисунок <?php echo $count; ?> " width="50%">

        <!-- Выводим кнопку перемотка вперед -->
        <button type="submit" name="ff" value=" <?php echo $count; ?> ">ВПЕРЕД</button>

    </form>
</body>
</html>

