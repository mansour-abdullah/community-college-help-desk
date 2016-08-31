<?php  
ob_start();
$title="";
require('../includes/config.php');
if(isset($_GET['cat'])){
    $cat= $_GET['cat'];
     if($cat=='1'){
        $title = "General";
    } 
    elseif($cat=='2'){
        $title = "Courses";
    }
     elseif($cat=='3'){
        $title = "Staff";
    }
}else{
    header("Location:admin-panel.php");
}
if(isset($_POST['edit'])){  
  $id = $_POST['id'];
  $question = $_POST['question']; 
  $ans = $_POST['ans']; 
  $cat =$_POST['cat'];
  $query = query("UPDATE fqa_en SET question='$question' ,ans='$ans' ,cat_id='$cat' WHERE id='$id' ");
  confirm($query);
     
}
 
elseif(isset($_GET['del_id'])){  
$id = $_GET['del_id'];
$query = query("DELETE FROM fqa_en WHERE id = '$id' ");
 confirm($query);
 
 
}     

?>
 
 
<head>
<title><?php echo $title; ?> Questions</title>
</head>
<body>      
<div class="content">
<h1 class="test"><?php echo $title; ?> Questions</h1>
<hr>
<br>
</div>
<center> 
<br/> 
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Question</th>
<th>Ans</th>
<th>Category</th>
<th>Edit</th>
<th>Delete</th>
</tr>  
<?php
 get_fqa($cat,"en");  
?>   
</table>
</center>
</body> 
<?php ob_flush(); ?>