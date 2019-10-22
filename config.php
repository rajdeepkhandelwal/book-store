
<?php 

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='examtimes';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
	die("database connection failed :" .mysqli_error());
}

$db_select=mysqli_select_db($conn,$dbname);                    
if(!$db_select){
	die("database connection failed :" .mysqli_error());
}


 ?>