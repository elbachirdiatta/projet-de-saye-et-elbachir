<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
ini_set('display_errors', 'on');
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."role.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."validator.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";
