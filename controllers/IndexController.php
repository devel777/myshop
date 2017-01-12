<?php
/*
 * Контроллер главной страницы
 */
//Подключаем модели
include_once '../models/CategoriesModel.php';

function testAction(){
    echo 'IndexController -> testAction<br />';
}
function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();

    //d($rsCategories);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}