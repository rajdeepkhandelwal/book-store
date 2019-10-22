
<?php include 'userdata.php'; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style type="text/css">
      form{
        margin: 30px auto;
        width: 400px;
        background-color: #f6f6f6;
        padding: 25px;
        border-radius: 6px;
      }
      form button{
        width: 100%;
      }
    </style>
<h1 style="text-align: center;padding-top: 25px;">Register Form</h1>
<form action="register.php" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="userName" class="form-control" id="exampleInputUsername1" placeholder="Enter Username" required>
  </div>
   <div class="form-group">
    <label>Firstname</label>
    <input type="text"  name="firstName" class="form-control" id="exampleInputFirstname1" placeholder="Enter Firstname" required>
  </div>
   <div class="form-group">
    <label>Lastname</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputLastname1" placeholder="Enter Lastname" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <!-- <div class="form-group">
    <label>Re-Type Password</label>
    <input type="password" name="re_password" class="form-control" id="exampleInputRePassword1" placeholder="Re-Type Password" required>
  </div> -->
  <button type="submit" name="register" class="btn btn-primary">Register</button>
    <p style="padding-top: 10px;">Already have a account! <a href="login.php">login here</a></p>

</form>