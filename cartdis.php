<?php 
ob_start();
include_once 'db.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>
<style>

input.MyButton1{
width: 250px;
margin-left:380px;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: grey;
color: #fff;
border: 1px solid ;
border-radius: 5px;
align:center;
}
input.MyButton1:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
</head>
<body>
<?php $name=$_SESSION['u_fname']; ?>
<div class=topnav>

  <img id="1"  src="imag/log.gif">
 <a href="pr.html">ABOUT US</a>
  <a >Hello,<?php echo ($name) ?> !</a>
  <a href="#">CART <span class="glyphicon glyphicon-shopping-cart"></a>
  <a href="logout.php">LOG OUT</a>
  <a href="kids.php">KIDS</a>
  <a href="women.php">WOMEN</a>
  <a href="men.php">MEN</a>
</div>
<h2><center>MY SHOPPING CART</center></h3>
<?php 
$price=0;
$email=$_SESSION['u_email'];
$sql="SELECT * from users where user_email='$email'";
		        	$result=mysqli_query($conn,$sql);
		  			while($row = mysqli_fetch_assoc($result))
		  			{
		  				$u_id=$row['user_id'];
		  		     	$sql="SELECT * from cart where user_id=$u_id";
		  		     	$result1=mysqli_query($conn,$sql);
		  		     	if(mysqli_num_rows($result1)>0){
		  		     		?>
		  		     		<div class="container" >
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr >
							<th style="width:50% ">Product</th>
							<th style="width:10%">Price</th>
							
							<th style="width:10%"></th>
						</tr style="width: 60%">
					</thead>
					<tbody>
<?php 

		  		    	while($row1 = mysqli_fetch_assoc($result1))
		  			  {
		  				$p_id=$row1['product_id'];
		  				$sql="SELECT * from men where id=$p_id";
		  				$result2=mysqli_query($conn,$sql);
		  				while($row2 = mysqli_fetch_array($result2))
		  				{
		  					?>
		  				 <td data-th="Product" style="margin-left: 30px;">
						<div class="row" >
						<form method="post" action="cartrem.php?id=<?php echo $row2['id'] ?>">
						<div class="col-sm-2 hidden-xs"> <img style="width: 80%; height: 40%;"src="<?php echo $row2['pimage'];?>"></div>
									<div class="col-sm-10">
										<h4 class="nomargin"></h4>
										<p style="font-weight: 200;"><strong><?php echo $row2['pbrand']; ?></strong></p>
										<h5 ><?php echo $row2['pname']; ?></h5>
										<button class="btn btn-success"  name="remove"> Remove</button>
									</div>
								</form>
								</div>
							</td>
							<td data-th="Price">RS <?php echo $row2['pprice'];?>/-</td>
							<tr>
	  					<?php  
	  						$price=$price+$row2['pprice'];
		  				}
		  			}?>
		  			<strong><em>Total amount</em></strong>: Rs <?php echo $price;?>/-
		  			<br>
<?php
$query="SELECT count(product_id) AS total from cart where user_id=$u_id";
$result=mysqli_query($conn,$query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo "<strong><em>Total no. of Products:</em></strong> ".$num_rows;
echo '<strong><br>Only COD Available*</strong>'
?>
<form method='post' action='cartdis.php'>
<input class="MyButton1" type="submit"  name="button4" style="margin-left: 240px;: " value="PLACE ORDER" />
</form><?php 

		  		}	
		  		else
		  		{
		  			echo '<center><img src="imag/car11..png"></center>';
		  		}
			}

 ?>
</html>
</body>
<?php 
if(isset($_POST['button4']))
{
  $sql="DELETE FROM cart where user_id=$u_id";
  $result=mysqli_query($conn,$sql);
  header('Location:end.php');
} 
?>