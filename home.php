<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <script>
    img{
        float:right;
      }
  </script>
<div class=topnav>
  <img id="1"  src="imag\log.gif">
   <a href="pr.html">ABOUT US</a>
  <?php 
  if(!isset($_SESSION['u_fname'])){
   echo  '<a href="log.html">LOGIN</a>
     <a href="signup.html">SIGN UP</a>';
}
else{
	
	$name=$_SESSION['u_fname'];
		echo "<a >Hello,".$name." !</a>";
    echo '<a href="cart.php">CART <span class="glyphicon glyphicon-shopping-cart"></a>
          <a href="logout.php"> LOG OUT</a>';
  }?>
  <a href="kids.php">KIDS</a>
  <a href="women.php">WOMEN</a>
  <a href="men.php">MEN</a>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="imag/cl.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="imag/food.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="imag/imag.jpeg" style="width:100%">
  <div class="text"></div>
</div>
 <div>
    <h3>  <center>Shop our brands</center></h3>
    <div>
     <img  style ="padding: 10px;" src="imag/bl.png">
     <img  style ="padding: 10px;" src="imag/bl2.png">
     <img  style ="padding: 10px;" src="imag/bl3.jpg">
     <img  style ="padding: 10px;" src="imag/bl4.png">  
     <img  style ="padding: 10px;" src="imag/u.png">  
     <img  style ="padding: 10px;" src="imag/h.png">  
     <img  style ="padding: 10px;" src="imag/onl.png">  
     <img  style ="padding: 10px;" src="imag/za.png">  
  </div>
 </div>
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 1500); // Change image every 1.5 seconds
}
</script>
</body>
</html> 
