<?php 
    
    include 'config.php';

if(isset($_POST['order_place'])){ 

  
    $userName=mysqli_real_escape_string($conn,$_POST['userName']);
    $firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
     $bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
   
        $query = "INSERT INTO orders (userName,firstName,lastName,email,bookName,address) 
            VALUES('$userName','$firstName','$lastName','$email','$bookName','$address')"; 
           
        mysqli_query($conn,$query); 
        // $_SESSION['userName']=$userName;
        $_SESSION['firstName']=$firstName;
        // $_SESSION['lastName']=$lastName;
        // $_SESSION['email']=$email;
        // $_SESSION['bookName']=$bookName;
        # Redirect the user to a login page 
        header("Location: confirmpage.php"); 
        exit; 
    } 
// } 
# echo out each variable that was set from above, 
# then destroy the variable. 
if(isset($error)){ 
    echo $error; 
    unset($error); 
} 
?>  