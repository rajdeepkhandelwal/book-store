
<?php 
    session_start();
    include 'config.php';

if(isset($_POST['register'])){ 

  
    $userName=mysqli_real_escape_string($conn,$_POST['userName']);
    $firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
        $query = "INSERT INTO users (userName,firstName,lastName,email,password) 
            VALUES('$userName','$firstName','$lastName','$email','$password')"; 
           
        mysqli_query($conn,$query); 
        $_SESSION['userName']=$userName;
        $_SESSION['firstName']=$firstName;
        $_SESSION['lastName']=$lastName;
        $_SESSION['email']=$email;

        # Redirect the user to a login page 
        header("Location: login.php"); 
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