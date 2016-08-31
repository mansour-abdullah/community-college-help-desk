<?php  
if(isset($_GET['dept'])){
$dept = $_GET['dept'];
    if($dept =='1'){
        $title = "الإدارة";
    } 
    elseif($dept =='2'){
        $title = "التعليم";
    }
     elseif($dept =='3'){
        $title = "الدعم الفني";
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
    $query = query("UPDATE staff_ar SET name = '$name' , office= '$office' , dept_id = '$dept' , Phone = '$phone' , email='$email'  where id = '$id' ");
    confirm($query);
}
else if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $query = query("DELETE FROM staff_ar where id = '$id'");
    confirm($query);
    
}
?>
<head>
<link rel="stylesheet" href="../css/style.css">
<title>معلومات الموظفين</title>   
</head>
<body>
<div class="content-h">
<h1>معلومات الموظفين</h1>
<a href="add-staff-ar.php"><button id="Add">إضافة جديد</button></a>
<a href="admin-staff.php"><button id="Add">English</button></a>
<hr>
<table id="ad-tb">
<tr>
<th>الرقم</th>
<th>لاسم</th>
<th>المكتب</th>
<th>القسم</th>
<th>الهاتف</th>
<th>البريد الإلكتروني</th>
<th>تعديل</th>
<th>حذف</th>           
</tr>
<?php
get_staff($dept , "ar");

?>   
</table>
</div>
</body> 