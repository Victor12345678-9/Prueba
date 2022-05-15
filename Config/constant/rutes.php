<?php 

define('HTTP_', 'http://');
define('ROOT_PATH_CORE', $_SERVER["HTTP_HOST"]);

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
define('ASSETS_PATH', ROOT_PATH.'Resources/');
define('PUBLIC_PATH', ROOT_PATH.'Public/');
define('LAYOUT_PATH', ROOT_PATH.'Public/views/layout/');

define ('RUTES_PATH', ROOT_PATH. 'Config/constant/rutes.php');
define('CONFIG_PATH', ROOT_PATH.'Config/');
define('APP_PATH', ROOT_PATH.'App/');
define('CONEXION_PATH', ROOT_PATH.'Config/conexion/');
define('CONTROLLERS_PATH', ROOT_PATH.'App/controllers/');
define('MODELS_PATH', ROOT_PATH.'App/models/');
define('CONSTANT_PATH', ROOT_PATH.'Config/constant/');




?>