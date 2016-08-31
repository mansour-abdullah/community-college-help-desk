<?php   
 
//POST
if(isset($_POST['edit'])){  
  $id = $_POST['id'];
  $user = $_POST['user'];
  $pass = $_POST['pass']; 
 
$query = query("UPDATE admin SET username='$user' ,password='$pass'  WHERE id='$id'");

confirm($query);
}
 
 if(isset($_GET['del_id'])){  
     $id = $_GET['del_id'];

     $query = query(" DELETE FROM admin WHERE id = '$id'");
    confirm($query);
 
 
}  
 
  
 
 
?>
<head>
<title>Admin</title> 
</head>
<body>
<div class="content">
<h1>Admin</h1>
<hr>
</div>
<center> 
<br/> 
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>  
<?php
get_users();
?>   
</table>
 

</center>
</body> 