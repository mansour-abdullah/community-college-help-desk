<?php  

$title="";
if(isset($_GET['cat'])){
    $cat= $_GET['cat'];
     if($cat=='1'){
        $title = "عامة";
    } 
    elseif($cat=='2'){
        $title = "المواد الدراسية";
    }
     elseif($cat=='3'){
        $title = "الموظفين";
    }
}else{
    header("Location:admin-panel.php");
}
if(isset($_POST['edit'])){  
  $id = $_POST['id'];
  $question = $_POST['question']; 
  $ans = $_POST['ans']; 
  $cat =$_POST['cat'];
  $query = query("UPDATE fqa_ar SET question='$question' ,ans='$ans' ,cat_id='$cat' WHERE id='$id' ");
  confirm($query);
     
}
 
elseif(isset($_GET['del_id'])){  
$id = $_GET['del_id'];
$query = query("DELETE FROM fqa_ar WHERE id = '$id' ");
 confirm($query);
 
 
}     

?>
 
 
<head>
<title> أسئلة</title>
</head>
<body>
<h1> أسئلة <?php echo $title; ?>: </h1>   
<hr>   
<table id="ad-tb">
<tr>
<th>الرقم</th>
<th>السؤال</th>
<th>الإجابة</th>
<th>القسم</th>
<th>تعديل</th>
<th>حذف</th>
</tr>  
<?php
 get_fqa($cat ,"ar");  
?>   
</table>
</body> 
