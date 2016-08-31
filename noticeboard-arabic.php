<?php 
include('includes/header.php'); 
require('includes/config.php');
 
?>
<head>
<title>لوحة الإعلانات </title>
</head>
<body>
<div class="container">
<div class="content"> 
<div class="style">   
<center>
<h1>لوحة الإعلانات </h1>
<table id="tb">
<tr>
<th>التاريخ</th>
<th>الحدث</th>
<th>الموقع</th>
</tr>
<?php
notice_board("ar");
?>
</table>
</center>
</div> 
</div>
</div>  
</body>  
<?php include('includes/footer.php'); ?>