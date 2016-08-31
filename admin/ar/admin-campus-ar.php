<?php  
 if(isset($_POST['edit'])){  
$id = $_POST['id'];
$name = $_POST['name']; 
$desc=$_POST['desc'];
$image = $_FILES['image']['tmp_name'] ;
$map = $_FILES['map']['tmp_name'] ;


 
 if (empty($image) && empty($map)) {
    $query = query("Update campus_ar set name='$name', descr='$desc' where id='$id' ");
     confirm($query);

 }
 else if (empty($map)){
     $image = addslashes(file_get_contents($image));
	     $query = query("Update campus_ar set name='$name', image='$image', descr='$desc' where id='$id' ");
   confirm($query);
 }
  else if (empty($image)){
      $map = addslashes(file_get_contents($map));
	     $query =query( "Update campus_ar set name='$name', map='$map', descr='$desc' where id='$id' ");
      
confirm($query);

 }
 
 
 else{
        $image = addslashes(file_get_contents($image));
    $map = addslashes(file_get_contents($map));
$query =query( "Update campus_ar set name='$name', image = '$image', map='$map',descr='$desc' where id='$id'");
confirm($query);
  }
}
elseif(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     $query = query(" DELETE FROM campus_ar WHERE id = '$id'");
    confirm($query);
}

?>
<head>

<title>مبنى الكلية</title>
<link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
<div class="content-h"> 
<h1>مبنى الكلية</h1>
<hr>
<br>
<center>
<table id="ad-tb" >
<tr>
<th>الرقم</th>
<th>الاسم</th>
<th>الصورة</th>
<th>الخريطة</th>
<th>الوصف</th>
<th>تحديث الصورة</th>
<th>تحديث الخريطة</th>
<th>تعديل</th>
<th>حذف</th>
</tr>
<?php
get_campus("ar");
?>   
</table>
</center>
</div>
</body> 