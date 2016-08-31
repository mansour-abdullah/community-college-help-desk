<?php 
if(isset($_POST['edit-nb'])){  
  $id = $_POST['id'];
  $name = $_POST['name']; 
  $place = $_POST['place']; 
  $date =$_POST['date'];
$query = query("UPDATE notice_board_ar SET name='$name' ,place='$place' , date='$date' WHERE id='$id'");
confirm($query);
     
}
else if(isset($_GET['del_id'])){  
     $id = $_GET['del_id'];

     $query =query(" DELETE FROM notice_board_ar WHERE id = '$id' ");
    confirm($query);
 
 
 
}  


?>
<head>
<link rel="stylesheet" href="../css/style.css">   
<title>لوحة الإعلانات</title>
</head>
<body>
<div class="content-h">
<h1>لوحة الإعلانات</h1>
<hr>
<table id="ad-tb">
<tr>
<th>الرقم</th>
<th>الإسم</th>
<th>الموقع</th>
<th>التاريخ</th>
<th>تعديل</th>
<th>حذف</th>
</tr>
<?php
get_nb("ar"); 
?>   
</table>
</div>  
</body> 