<?php 
include_once 'db.php';
session_start();
$user=$_SESSION['u_id'];
if(isset($_POST["remove"])){
	$k=$_GET['id'];
	$sql="DELETE FROM cart where user_id='$user' and product_id='$k'";
	$result=mysqli_query($conn,$sql);
	header("LOCATION:cartdis.php");
}
	 ?>
