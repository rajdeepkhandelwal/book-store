<?php include 'orderdata.php'; ?>
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
<h1 style="text-align: center;padding-top: 25px;">Order</h1>
<form action="orderform.php" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="userName" class="form-control" value="<?php echo $_SESSION['userName']; ?>">
  </div>
   <div class="form-group">
    <label>Firstname</label>
    <input type="text"  name="firstName" class="form-control" value="<?php echo $_SESSION['firstName']; ?>" >
  </div>
   <div class="form-group">
    <label>lastname</label>
    <input type="text" name="lastName" class="form-control"  value="<?php echo $_SESSION['lastName']; ?>">
  </div>
  <div class="form-group">
    <label>Bookname</label>
    <input type="text" name="bookName" class="form-control"  placeholder="bookname" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"  placeholder="address" required>
  </div>
  <!-- <div class="form-group">
    <label>Re-Type Password</label>
    <input type="password" name="re_password" class="form-control" id="exampleInputRePassword1" placeholder="Re-Type Password" required>
  </div> -->
  <button type="submit" name="order_place" class="btn btn-primary">place order</button>
</form>