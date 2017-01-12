<?php
/*
 * Инициализация подключения к базе данных
 */
/*function db() {
    $dbHost = '127.0.0.1';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'myshop';

    $db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    $db->set_charset('utf8');

    if($db->connect_errno) {
        die('MySQL access denied.');
    }

    return $db;
}
*/
$dbHost = '127.0.0.1';
$dbName = 'myshop';
$dbUser = 'root';
$dbPass = '';

$db = mysql_connect($dbHost, $dbUser, $dbPass);
if(! $db){
    echo 'Ошибка доступа';
    exit();
}
if(! mysql_select_db($dbName, $db)){
    echo 'Ошибка: {$dbName}';
}
