<?php  
if(isset($_POST['edit-nb'])){  
  $id = $_POST['id'];
  $name = $_POST['name']; 
  $place = $_POST['place']; 
  $date =$_POST['date'];
$query = query("UPDATE notice_board_en SET name='$name' ,place='$place' , date='$date' WHERE id='$id'");
confirm($query);
     
}
else if(isset($_GET['del_id'])){  
     $id = $_GET['del_id'];

     $query =query(" DELETE FROM notice_board_en WHERE id = '$id' ");
    confirm($query);
 
 
 
}  



 
?>
<head>
<title>Admin Notice Board</title>   
</head>
<body>
<div class="content">
<h1>Notice Board</h1>

<hr>
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Name</th>
<th>Place</th>
<th>Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
get_nb("en"); 
?>   
</table>
</div>
 
</body> 