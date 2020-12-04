<?php
require 'includes/common.php';
session_start();
if(!isset($_SESSION['email']))
{
    header('loaction:index.php');
}
 else {
    session_destroy();
    header('location:index.php');
}
   
  

?>