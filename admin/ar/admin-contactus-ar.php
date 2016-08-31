<?php 

if(isset($_POST['insert'])){  
$id = $_POST['id'];  
$cat=$_POST['category'];
$ans=$_POST['ans'];
$question=$_POST['question'];

    $query=query("insert into fqa_ar values ('' , '$question','$ans','$cat')");
     confirm($query);  
 
}
 
elseif(isset($_GET['del_id'])){  
$id = $_GET['del_id'];
$query = query("DELETE FROM asked_questions_ar WHERE id = '$id' ");
 confirm($query);
 
 
}     
?>
<head>
<style>
</style>
<title>أسئلة التواصل</title>
</head>
<body>
<h1>أسئلة التواصل</h1>
<?php echo $msg; ?>
<hr>
<table id="ad-tb">
<tr>
<th>الرقم</th>
<th>الإسم</th>
<th>البريد الإلكتروني</th>
<th>السؤال</th>
<th>الإجابة</th>
<th>القسم</th>
<th>إدخال</th>
<th>حذف</th>         
</tr>
<?php
get_contact("ar");
?>   
</table>
</body> 