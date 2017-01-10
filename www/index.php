<?php
include_once '../config/config.php'; //инициализация настроек
include_once '../library/mainFunctions.php'; //основные функции

//определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
//echo 'Подключаемый php файл (Контроллер) = ' . $controllerName . '<br />';

//определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//echo 'Функция формирующая страницу (Экшн) = ' . $actionName . '<br />';






loadPage($smarty, $controllerName, $actionName);
//var_dump(loadPage);
//loadPage($controllerName, $actionName);
