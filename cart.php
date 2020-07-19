<?php 
include_once 'db.php';
session_start();
 ?>
 <?php 
 
 	if(isset($_SESSION['u_fname'])) 	{
 	    $id=$_SESSION['u_id'];
 		$pid=$_GET["id"];
 		$sql="INSERT into cart values ($id,$pid)";
 		$result=mysqli_query($conn,$sql);
 		header("LOCATION:cartdis.php");
 	}
 	else
 	{
 		header("LOCATION:log.html");
 	}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="home.css">

	<title>Cart</title>
</head>
	<style type="text/css">
		#3{
			width:40px;
			height:30px;
		}
	</style>
<body>

</body>
</html>