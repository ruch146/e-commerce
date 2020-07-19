
<?php 
 include  'db.php'; 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<title>For Men</title>
</head>

<div class=topnav>
  <img id="1" src="imag/log.gif">
  <a href="pr.html">ABOUT US</a>
  <?php 
  if(!isset($_SESSION['u_fname'])){

   echo  '<a href="log.html">LOGIN</a>
     <a href="sign.html">SIGN UP</a>';
}
else{
	$name=$_SESSION['u_fname'];
			
		echo "<a>Hello,".$name." !</a>";
	    echo '
	    <a href="cartdis.php">CART <span class="glyphicon glyphicon-shopping-cart"></a>
          <a href="logout.php"> LOG OUT</a>';
  }?>
   <a  href="kids.php">KIDS</a>
  <a href="women.php">WOMEN</a>
  <a href="men.php">MEN</a>
</div>
<img src="imag/me.jpg">
<h2 ><center>MEN'S COLLECTION</center ></h2>
      <form method="post" action="men.php">
<input class="MyButton" type="submit"  name="button1" value="200-1000"  />
<input class="MyButton" type="submit"  name="button2" value="1000-2000" />
<input class="MyButton" type="submit" name="button3" value="2000-3000"  /><br><br>
<input class="MyButton1" type="submit"  name="button4" value="HIGH TO LOW PRICE" />
<input class="MyButton2" type="submit" name="button5" value="LOW TO HIGH PRICE"  /><br><br>

<style >
#3{
		width:180px;
		height:240px;
}
button {
    height: 40px;
    padding: 0 34px;
    margin-left:3px;
    border: 0;
    border-radius: 20px;
    background-color: #0065ff;
    color: #fff;
    font-weight: 700;
    display: none;
}
.hello:hover button {
    display: block;
}
.hello:hover{
	 box-shadow: 0 1px 5px 0 rgba(100,0,10,2);
}
input.MyButton {
width: 250px;
margin-left:175px;
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
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
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
input.MyButton2{
width: 250px;
margin-left:200px;
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
input.MyButton2:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
<body>

<?php 

if(isset($_POST['button1'])){
	$sql="SELECT * FROM men WHERE pprice BETWEEN 200 AND 1000 AND pgender IN('M')";
	$result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 

	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
  </div>
<?php 	
	}   	
 else if(isset($_POST['button2'])){
	$sql="SELECT * FROM men WHERE pprice BETWEEN 1000 AND 2000 AND pgender IN('M')";
	$result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 

	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
  </div>
<?php 	
	} 

else if(isset($_POST['button3'])){
	$sql="SELECT * FROM men WHERE pprice BETWEEN 2000 AND 3000 AND pgender IN('M')";
	$result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 

	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
  </div>
<?php 	
	}  	
else if(isset($_POST['button4'])){
	$sql="SELECT * FROM men where pgender IN('M') ORDER BY pprice DESC";
	$result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 

	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
   </div>
    <?php 	
	}
	else if(isset($_POST['button5'])){
	$sql="SELECT * FROM men where pgender IN('M') ORDER BY pprice ASC";
	$result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 

	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
   </div>
    <?php 	
	}  	 	  	 	
else{
		 $query="SELECT * FROM men WHERE pgender='M'";
		 $result=mysqli_query($conn,$query);
		 if(mysqli_num_rows($result)>0)
		 {
		 	while($row = mysqli_fetch_array($result))
		 	{
		?>
		<div >
	<div  id="wrap" >
	  <div id="column" class="columns_4" >
	   <div class="hello" style=" width:20%; height:450px;float:left; padding: 20px;">
	  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
	  	<img  id="3" src="<?php echo $row['pimage'] ?>" >				
	  	<h5 > <strong><?php echo $row ['pbrand']?></strong></h5>
	  	<h5> <?php echo $row ['pname']?></h5>
	  	<h5 style="font-size: 13px;" ><strong> RS <?php echo $row ['pprice']?>/-</strong></h5>
	  	<input  class="btn btn-success"  name="add_to_cart" type="submit" value="Add To Cart"  >
	   </form>
	   </div> 
	 	<?php
			}
		 }
		?>
	  </div>	
	</div>
  </div>
  </div>
  <?php 	
}
?>
</body>
</html>
