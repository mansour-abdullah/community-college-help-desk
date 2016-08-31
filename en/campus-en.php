<?php 
include('../includes/header-en.php'); 
?>
<head>
<title>Campus </title>
<style>
.container{
color:#333;
}
.container h1 , .black {color:black;}
.img {
 margin:30px; 
width:50%;
height:350px;        
border: solid 2px #555;
float:right;
border-radius:50px;
  
 
}
 .map {
 
width:350px;
height:200px;        
 margin-top:20px;
float:left;
	 
	 
 }
 .text{
	 font-size:20px;
	width:40%;
	margin-top:50px;
	float:left;
	 
}
hr{
 margin-bottom:20px; 
 }     
</style>
</head>
<body>
<div class="container">
<div class="content">
<center>
<h1>Buildings Information</h1>
<hr>
</center>
<?php
 campus("en");
?>
</div>
</div>
</body>
<?php include('../includes/footer-en.php') ?>