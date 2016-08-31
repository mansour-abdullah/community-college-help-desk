<?php  
if(isset($_POST['edit-tool'])){  
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link']; 
$desc=$_POST['desc'];
 $image =$_FILES['image']['tmp_name']; 
 
 if (empty($image)) {
    $query = query("Update tools_ar set name='$name',link='$link', descr='$desc' where id='$id'");
  confirm($query);
 }

 else{
     $image = addslashes(file_get_contents($image));
$query = query("Update tools_ar set name='$name', img = '$image',descr='$desc' where id='$id'");
confirm($query);

  }
}

if(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     $query = query(" DELETE FROM tools_ar WHERE id = '$id'");
confirm($query);
   
}
 
?>
<head>
<link rel="stylesheet" href="../css/style.css">   
<title>الأدوات المساعدة</title>
</head>
<body>
<div class="content-h">
<h1>الأدوات المساعدة</h1>
<a href="add-tools-ar.php"><button id="Add">إضافة أداة جديدة</button></a>
<a href="admin-tools-en.php"><button id="Add">English</button></a>
<hr>
<table id="ad-tb" >
<tr>
<th>الرقم</th>
<th>الاسم</th>
<th>الرابط</th>
<th>الوصف</th>
<th>الصورة</th>
<th>تحديث الصورة</th>
<th>تعديل</th>
<th>حذف</th>
</tr>
<?php
  get_tools("ar");
?>   
</table>
</div>
</body> 