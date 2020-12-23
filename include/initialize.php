<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'Shiksha_Abhyan');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');


require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php"); 
require_once(LIB_PATH.DS."lessons.php");
require_once(LIB_PATH.DS."exercises.php"); 
require_once(LIB_PATH.DS."autonumbers.php"); 
require_once(LIB_PATH.DS."students.php"); 

require_once(LIB_PATH.DS."database.php");
?>
