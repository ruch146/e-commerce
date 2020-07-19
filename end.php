<!DOCTYPE html>

<?php
include 'db.php';
session_start(); 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("imag/end.jpg");
  background-color: #cccccc;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
input.MyButton {
width: 250px;
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
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">THANK YOU FOR SHOPPING!</h1>
    <h2 align="center">SHOP AGAIN!!!!</h2>
    <form method="post" action="home.php">
<input class="MyButton" type="submit"  name="button1" value="Continue Shopping"  />
  </div>
</div>
</body>
</html>
