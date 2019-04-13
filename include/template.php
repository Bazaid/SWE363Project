<?php
require_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('./views/');
$smarty->caching = 0;
