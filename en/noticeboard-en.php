<?php 
include('../includes/header-en.php'); 
 ?>
<html>
<head>
<title>Notice Board </title>
</head>
<body>
<div class="container">
<div class="content"> 
<div class="style">   
<center>
<h1>Notice Board </h1>
<table id="tb">
<tr>
<th>Date</th>
<th>Name</th>
<th>Place</th>
</tr>
<?php
notice_board("en");
?>
</table>
</center>
</div> 
</div>
 </div>  
<?php include('../includes/footer-en.php'); ?>
</body>  