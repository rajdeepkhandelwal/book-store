<?php session_start();
include 'header.php';
 include 'config.php';?>

<div class="container" style="text-align: center;">
	<h1>First Year Engineering (FE)</h1><hr><br>
</div>

<?php 
	$_GET['sem'];
	$_GET['branch'];
	if($_GET['sem']==1 && $_GET['branch']=='FE'){
		 $products = array();
		$query = "SELECT * FROM products WHERE branch='FE' AND semester='1'";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result)){

			        $products[] = $row;
                
				
		 }?>  
		<div class="container">
			<div class="row" style="text-align: center;">
			<?php foreach ($products as $row){?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="thumbnail">
						<img src="<?php echo $row['productImage']; ?>">
						<div class="caption">
							<h4><?php echo $row['productName']; ?></h4>
							<!-- <p><?php echo $desc ; ?></p> -->
							<p class="price"><b>Rs.<?php echo $row['price']; ?></b></p>
							<a href="order.php?book=1" style="color: white;"><button class="btn btn-primary" style="width: 100px;">Buy</button></a>
						</div>
					</div>
				</div>
					<?php }	 ?>
			</div>
			
		</div>
	<?php } ?>

		


     








<?php include 'footer.php';?>