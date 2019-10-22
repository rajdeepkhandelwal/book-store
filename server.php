<?php 
  session_start(); 

  if (!isset($_SESSION['userName'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header("location: login.php");
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userName']);
  	header("location: index.php");
  }
  include 'index.php';
?>