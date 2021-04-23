<?php

session_start();
 unset($_SESSION['flag']);//destroy ['flag'] variable so that we can't find home.php by url typing;
//setcookie('flag', true, time()-10, '/');
 header('location: ../View/home.php');

  
?>

