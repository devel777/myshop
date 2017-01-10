<?php
function testAction(){
    echo 'IndexController -> testAction<br />';
}
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}