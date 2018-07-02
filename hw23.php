<?php

include __DIR__.'/test.php'; //оператор include возвращает следующее: "Это текст из файла TEST.PHP //6"

//закючаем в скобки, include стал принимать аргументы
include (__DIR__.'/test.php'); //функция include возвращает следующее: "Это текст из файла TEST.PHP //6"

//проверим, что возвращает функция
$res=include (__DIR__.'/test.php');
var_dump($res); //функция include возвращает следующее: "Это текст из файла TEST.PHP //6 int(1)

//проверим, что возвращает функция при неверном имени файла
$res=include (__DIR__.'/test1.php');
var_dump($res); //функция include возвращает ошибку и: "bool(false)"

//При успешном подключении файла возвращает 1 при неуспешном- ошибки и false

//проверим, что возвращает функция при указании в файле test2.php возвращаемого значения "return 2+4;"
$res2=include (__DIR__.'/test2.php');
var_dump($res2); //Это текст из файла TEST2.PHP  int(6)

//т.е. как функция include работает и возвращает значение
