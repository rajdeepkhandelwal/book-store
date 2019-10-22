



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ExamTime</title>
		<link rel="stylesheet" type="text/css" href="header.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div id="navbar1">
	<div class="container">
		<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					    <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
				    </button>
				<a class="navbar-brand" href="server.php">ExamTimes</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
					<li><a href="index.php"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="about.php">About</a></li>
				</ul>	
				<ul class="nav navbar-nav navbar-right">
<!-- 					<li><a href="#">Cart</a></li>
 -->					<?php if(isset($_SESSION['userName'])){ ?>
						<li><a href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['userName']; ?></a></li>
						<li><a href="server.php?logout='1'">Logout</a></li>
					<?php }else{ ?>	
					<li><a href="register.php">SignUp</a></li>	
 					<li><a href="login.php">Login</a></li>
 				<?php } ?>
				</ul>
		    </div>
	    </div>
	</nav>
 </div>
 </div>

<div class="container" id="navbar2">
	<ul>

	  <li><a href="FE.php">FirstYear Engineering(FE)</a></li>    
	  <li><a href="cmpn.php">Computer Engineering </a></li>
	  <li><a href="inft.php">Information Technology </a></li>
	  <li><a href="extc.php">Electronics & Telecommunication </a></li>
	  <li><a href="etrx.php">Electronics Engineering </a></li>
	  <li><a href="BM.php">Biomedical Engineering </a></li>
	</ul>
</div>	













