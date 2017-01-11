<?php
/*
 * Инициализация подключения к базе данных
 */
$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";

//соединяемся с бд
$db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);
if(! $db){
    echo 'Ощибка доступа к Mysql';
    exit();
}

if(! mysqli_select_db($db, $dbname)){
    echo 'Ошибка доступа к базе данных: {$dbname}';
    exit();
}
