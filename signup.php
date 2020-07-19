<?php 
session_start();


if(isset($_POST['submit'])){ 
	include_once 'db.php';
	$first = mysqli_real_escape_string($conn,$_POST['fname']) ;
	$last= mysqli_real_escape_string($conn,$_POST['lname']) ;
	$email = mysqli_real_escape_string($conn,$_POST['email']) ;
	$password = mysqli_real_escape_string($conn,$_POST['password']) ;

	//error handlers
	//empty fields
	if(empty($first) || empty($last) || empty($email) ||empty($password))
	{
		header("Location:sign.html");
		exit();
	}else{
		//check if ip characaters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ){
			header("Location: sign.html");
		exit(); 
		}
		else{
			//check email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location:sign.html");
			exit();
			}else{
				$sql="SELECT * FROM users WHERE user_email='$email'";
				$result=mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0){
					echo '<script>alert("Username has been already taken.");
		  			location="sign.html";
		  			</script>';
					}else{
					//hashpassword
					$hashedpwd=password_hash($password,PASSWORD_DEFAULT);
					//insert data
					$sql="INSERT INTO users (user_fname,user_lname,user_email,user_pwd) values ('$first','$last','$email','$hashedpwd')";
					mysqli_query($conn,$sql);
		  			$_SESSION['u_fname']=$first;
		  			$_SESSION['u_lname']=$last;
		  			$_SESSION['u_email']=$email;
		  		   $sql="SELECT * from users where user_email='$email'";
		           $result=mysqli_query($conn,$sql);
		           $resultcheck=mysqli_num_rows($result);
		  		   while($row = mysqli_fetch_assoc($result))
		  			{
		  				$_SESSION['u_id']=$row['user_id'];
					}
		  			
					header("Location: home.php");
				}
			}
		}
	}

} else{
	header("Location: sign.html");
	exit();
}