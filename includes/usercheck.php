<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  
if(!$_SESSION['userId']) {
	header('Location: login.php');
	exit();
}
?>