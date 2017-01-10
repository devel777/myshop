<?php
//константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//используемый шаблон
$template = 'default';

//пути к файлам шаблонов
define('TemplatePrefix', "../views/{$template}");
define('TemplatePostfix', '.tpl');

//пути к шаблонам в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");

//инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);