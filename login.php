   
<?php include 'verify.php' ?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style type="text/css">
      form{
        margin: 30px auto;
        width: 400px;
        background-color: #f6f6f6;
        padding: 20px;
        border-radius: 6px;
      }
      form button{
        width: 100%;
      }
    </style>
    <h4 style="text-align: center;"><a href="index.php">ExamTime</a></h4>
<h1 style="text-align: center;padding-top: 15px;">Login Form</h1>
<form action="login.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="userName" class="form-control" id="exampleInputUsername1" placeholder="Enter Username" required>
  </div>
  
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
  
    <p style="padding-top: 10px;">New User! <a href="register.php">Register here</a></p>

</form>