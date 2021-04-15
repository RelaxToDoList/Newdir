<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database); 

if($link)
    echo("<script>console.log('Соединение установлено.');</script>");
else
    die('Ошибка подключения к серверу баз данных.');

     
// закрываем подключение
mysqli_close($link);
?>