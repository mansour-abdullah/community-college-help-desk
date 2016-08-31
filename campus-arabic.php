<?php 
include('includes/header.php');
require('includes/config.php');
?>
<head>
<title>مبنى الكلية </title>
<style>
.container{
	color:#333;


}
.container span strong , h1 {color:black;}
.img {
 margin:30px; 
width:50%;
height:350px;        
border: solid 2px #555;
float:left;
border-radius:50px;
  
 
}
 .map {
 
width:350px;
height:200px;        
 margin-top:20px;
float:right;
	 
	 
 }
 .text{
	 font-size:20px;
	width:40%;
	margin-top:50px;
	float:right;
	
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
<h1>مبنى الكلية</h1>
<hr>
</center>
<?php
campus("ar");
?> 
</div>
</div>
<?php include('includes/footer.php') ?>