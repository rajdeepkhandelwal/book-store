<?php 
	  session_start();
	  include 'header.php';
	  include 'config.php'; 

	  $_GET['book'];
	  	if(isset($_SESSION['userName'])){
			  if($_GET['book']==1){
			  	include 'orderform.php';
			  }
			}else{
				header("Location:login.php");
			}  
















?>
<?php include 'footer.php'; ?>