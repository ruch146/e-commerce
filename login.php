<?php 
session_start();
if(isset($_POST['submit'])){ 
	include_once 'db.php';
	$email = mysqli_real_escape_string($conn,$_POST['username']) ;
	$password = mysqli_real_escape_string($conn,$_POST['password']) ;
	//error handlers
	//if ip empty
	if(empty($email) || empty($password)){
		echo'<script >
		  	location="log.html";
		  	</script>';
		exit();
	}else{
		  $sql="SELECT * from users where user_email='$email'";
		  $result=mysqli_query($conn,$sql);
		  $resultcheck=mysqli_num_rows($result);
		  if($resultcheck<1){
		  	echo'<script >alert("Invalid Username");
		  	location="log.html";
		  	</script>';
		
		  }else{
		  	if($row =mysqli_fetch_assoc($result)){
		  		//dehashing password
		  		$hashedpwdcheck=password_verify($password,$row['user_pwd']);
		  		if($hashedpwdcheck== false)
		  		{
		  			echo '<script>alert("Please enter correct password.");
		  			location="log.html";
		  			</script>';
		  		    exit();
		  		}
		  		elseif($hashedpwdcheck == true){
		  			header("Location:home.php");
		  			$_SESSION['u_id']=$row['user_id'];
		  			$_SESSION['u_fname']=$row['user_fname'];
		  			$_SESSION['u_lname']=$row['user_lname'];
		  			$_SESSION['u_email']=$row['user_email'];
		  			
		  		}
		  	}
		  }
	}
} 
	else{
		header("Location: ../login.php?login=error3");
		exit();
	}