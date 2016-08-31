<?php   

if(isset($_POST['edit-tool'])){  
$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link']; 
$desc=$_POST['desc'];
 $image =$_FILES['image']['tmp_name']; 
 
 if (empty($image)) {
    $query = query("Update tools_en set name='$name',link='$link', descr='$desc' where id='$id'");
  confirm($query);
 }

 else{
     $image = addslashes(file_get_contents($image));
$query = query("Update tools_en set name='$name', img = '$image',descr='$desc' where id='$id'");
confirm($query);

  }
}

if(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     $query = query(" DELETE FROM tools_en WHERE id = '$id'");
confirm($query);
   
}
 

?>
<head>

<title>Tools Information</title> 
</head>
<body>
<div class="content">
<h1>Tools Information</h1>
<hr>
<table id="ad-tb"  >
<tr>
<th>ID</th>
<th>Name</th>
<th>Link</th>
<th>Description</th>
<th>Image</th>
<th>Update Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
 get_tools("en");
?>   
</table>
</div>
</body> 