<?php 
include('includes/header.php');
require('includes/config.php');
$title='';
if(isset($_GET['dept'])){
$dept = $_GET['dept'];
    if($dept =='2'){
        $title = "التعليم";
    } 
    elseif($dept =='1'){
        $title = "الإدارة";
    }
     elseif($dept =='3'){
        $title = "الدعم الفني";
    }
}
else{
    header("Location:staff-info.php");
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
<table id="tb">
<tr>
<th>الاسم</th>
<th>المكتب</th>
<th>الهاتف</th>
<th>البريد الإلكتروني</th>
</tr>

<?php
 
    staff($dept,"ar");
?>
</table>
    </center>
</div>
</div>
</div>
</body> 
 <?php include('includes/footer.php'); ?>