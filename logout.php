<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn())
{
    header('Location: index.php'); 
    exit();
}

Session::destroy();

$smarty->display('logout.tpl');