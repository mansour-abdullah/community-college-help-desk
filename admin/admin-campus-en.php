<?php  
 if(isset($_POST['edit'])){  
$id = $_POST['id'];
$name = $_POST['name']; 
$desc=$_POST['desc'];
$image = $_FILES['image']['tmp_name'] ;
$map = $_FILES['map']['tmp_name'] ;


 
 if (empty($image) && empty($map)) {
    $query = query("Update campus_en set name='$name', descr='$desc' where id='$id'");
     confirm($query);

 }
 else if (empty($map)){
     $image = addslashes(file_get_contents($image));
	     $query = query("Update campus_en set name='$name', image='$image', descr='$desc' where id='$id'");
   confirm($query);
 }
  else if (empty($image)){
      $map = addslashes(file_get_contents($map));
	     $query =query( "Update campus_en set name='$name', map='$map', descr='$desc' where id='$id'");
      
confirm($query);

 }
 
 
 else{
        $image = addslashes(file_get_contents($image));
    $map = addslashes(file_get_contents($map));
$query =query( "Update campus_en set name='$name', image = '$image', map='$map',descr='$desc' where id='$id'");
confirm($query);
  }
}
elseif(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     $query = query(" DELETE FROM campus_en WHERE id = '$id'");
    confirm($query);
}


?>
<head>
<title>Campus Information</title>
</head>
<body>
<div class="content">
<h1>Campus Information</h1>
<hr>
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Name</th>
<th>Image</th>
<th>Map</th>
<th>Description</th>
<th>Update Image</th>
<th>Update map</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
get_campus("en");
?>   
</table>
</div>
</body> 