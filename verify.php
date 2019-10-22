<?php 


if(isset($_POST['login'])){ 
  
     	include 'config.php';
     
    $usr = mysqli_real_escape_string($conn,$_POST['userName']); 
    $pas = mysqli_real_escape_string($conn,$_POST['password']); 
    $sql ="SELECT * FROM users  
        WHERE userName='$usr' AND 
        password='$pas' "; 
    $results = mysqli_query($conn, $sql);
    if(mysqli_num_rows($results) == 1){ 
        $row = mysqli_fetch_array($results); 
        session_start(); 
        $_SESSION['userName'] = $row['userName']; 
        $_SESSION['firstName'] = $row['firstName']; 
        $_SESSION['lastName'] = $row['lastNname']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: server.php");
        
    }else{
    	header("Location: login.php"); 
    }
}
?> 




