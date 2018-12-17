<?php 

 namespace PHPMVC;

  /*use PHPMVC\CTRL\User;*/
  require_once '../app/controller/user.php';

//define('DS',DIRECTORY_SEPARATOR);
 if(!define('DS', DIRECTORY_SEPARATOR)){
 	define('DS',DIRECTORY_SEPARATOR);
 }
require_once '..'.DS.'app'.DS.'config.php';

echo APP_PATH;
$user1 = new CTRL\User();
// $user1::affiche('test','12','tr');
// $user2 = new User("KOBAYAKAWA","Sena");

// $user1->affiche();

 ?>