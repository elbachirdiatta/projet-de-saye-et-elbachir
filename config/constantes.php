<?php
ini_set('display_errors', 'on');
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("WEB_ROOT","http://localhost:8003/");
define("KEY_ERRORS","errors");
define("WEB_PUBLIC",ROOT."public".DIRECTORY_SEPARATOR);
