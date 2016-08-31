<?php
include('../includes/header-en.php');
if(isset($_GET['dept'])){
$dept = $_GET['dept'];
    if($dept =='1'){
        $title = "Faculty";
    } 
    elseif($dept =='2'){
        $title = "Adminstration";
    }
     elseif($dept =='3'){
        $title = "IT";
    }
}
else{
    header("Location:staff-info-en.php");
}
?>
<body>
<title><?php echo $title; ?></title>
<div class="container">
<div class="content">
<div class="style">
<center>
<h1><?php echo $title; ?></h1>
<table id="tb">
<tr>
<th>Name</th>
<th>Office</th>
<th>Phone</th>
<th>E-mail</th>
</tr>
<?php
staff($dept , "en");
?>
</table>
</center>
</div>
</div>
</div>
</body>
<?php include('../includes/footer-en.php'); ?>