<?php 
include('../includes/header-en.php');
if(isset($_GET['category'])){
$cat = $_GET['category'];
    if($cat=='1'){
        $title = "General";
    } 
    elseif($cat=='2'){
        $title = "Courses";
    }
     elseif($cat=='3'){
        $title = "Staff";
    }
}
else{
    header("Location:fqa-en.php");
}
?>
<title><?php echo $title; ?></title>
<body>
<div class="container">
<div class="content">
<div class="style">

<h1><?php echo $title; ?> :</h1>
<hr>
<center>
<?php
    fqa($cat , "en");
?>
    </center>
</div>
</div>
</div>
</body> 
<?php include('../includes/footer-en.php'); ?>
 
