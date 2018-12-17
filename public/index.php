<?php 

 namespace PHPMVC;

  use PHPMVC\CTRL\User;
//define('DS',DIRECTORY_SEPARATOR);
 if(!define('DS', DIRECTORY_SEPARATOR)){
 	define('DS',DIRECTORY_SEPARATOR);
 }


require_once '..'.DS.'app'.DS.'config.php';

echo APP_PATH;

 ?>