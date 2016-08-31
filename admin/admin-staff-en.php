<?php   
if(isset($_GET['dept'])){
$dept = $_GET['dept'];
    if($dept =='1'){
        $title = "Adminstration";
    } 
    elseif($dept =='2'){
        $title = "Faculty";
    }
     elseif($dept =='3'){
        $title = "IT";
    }
}
else{
    header("Location:staff-info-en.php");
}

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $name = $_POST['name'];
    $office = $_POST['office'];
    $dept = $_POST['dept'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = query("UPDATE staff_en SET name = '$name' , office= '$office' , dept_id = '$dept' , Phone = '$phone' , email='$email'  where id = '$id' ");
    confirm($query);
}
else if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $query = query("DELETE FROM staff_en where id = '$id'");
    confirm($query);
    
}
?>
<head>
<title>Staff Information</title>
</head>
<body>
<div class="content">
<h1><?php echo $title; ?></h1>
<hr>
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Name</th>
<th>Office</th>
<th>Department</th>
<th>Phone</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
   get_staff($dept , "en");
?>   
</table>
</div>
</body>  