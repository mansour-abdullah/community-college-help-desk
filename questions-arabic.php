<?php 
include('includes/header.php');
require('includes/config.php');
if(isset($_GET['category'])){
$cat = $_GET['category'];
    if($cat=='1'){
        $title = "أسئلة عامة";
    } 
    elseif($cat=='2'){
        $title = "المواد الدراسية";
    }
     elseif($cat=='3'){
        $title = "الموظفين";
    }
}
else{
    header("Location:fqa.php");
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
    fqa($cat,"ar");
?>
    </center>
</div>
</div>
</div>
</body> 
 <?php include('includes/footer.php'); ?>
