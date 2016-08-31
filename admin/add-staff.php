<?php 

if(isset($_POST['submit'])){   
$name=$_POST['name'];
$office=$_POST['office'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$email=$_POST['email'];

if(check(array($name , $office , $dept , $phone , $email))){
    $msg = error('Please fill out the form below');
    
}    
else{    
$query=query("insert into staff_en values ('' , '$name','$office','$dept','$phone','$email')");
confirm($query);
    $msg = success("The new member has been added successfully");
}
}

//arabic
if(isset($_POST['submit_ar'])){   
$name=$_POST['name'];
$office=$_POST['office'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$email=$_POST['email'];

if(check(array($name , $office , $dept , $phone , $email))){
    $msg_ar = error('يرجى إكمال البيانات');
    
}    
else{    
$query=query("insert into staff_ar values ('' , '$name','$office','$dept','$phone','$email')");
confirm($query);
    $msg_ar = success("تم إضافة الموظف بنجاح");
}
}




?>

<head>
<title>Add Member</title>
</head>
<body>


<article class="module width_half">
<header><h3>Add Staff Member </h3></header>
<div class="module_content">
<?php echo $msg; ?>
<form method="post" action=''>  
<fieldset>
<label ><strong>Name</strong></label><input type="text" name='name'>
</fieldset>         

<fieldset>
<label ><strong>Office</strong></label><input type="text" name='office'>
</fieldset>
<fieldset>
<label><strong>Department</strong></label>
<select name='dept'>
<option>"Choose Department"</option>
<option value='1'>Admin</option>
<option value='2'>Faculity</option>
<option value='3'>IT</option>
</select>
</fieldset>
<fieldset>
<label><strong>Phone</strong></label>
<input type="text" name="phone">
</fieldset>
<fieldset>
<label><strong>E-mail</strong></label>
<input type="text" name="email">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="Submit" name='submit'>
</div>
</fieldset>  
</form> </div>   </article>

<!--Arabic-->
<article class="module width_half" style="direction:rtl">
<header><h3>إضافة موظف </h3></header>
<div class="module_content">
<?php echo $msg_ar; ?>
<form method="post" action=''>  
<fieldset>
<label ><strong>الاسم</strong></label><input type="text" name='name'>
</fieldset>         

<fieldset>
<label ><strong>المكتب</strong></label><input type="text" name='office'>
</fieldset>
<fieldset>
<label><strong>القسم</strong></label>
<select name='dept'>
<option>"يرجى إختيار القسم"</option>
<option value='1'>الإدارة</option>
<option value='2'>التعليم</option>
<option value='3'>الدعم الفني</option>
</select>
</fieldset>
<fieldset>
<label><strong>الهاتف</strong></label>
<input type="text" name="phone">
</fieldset>
<fieldset>
<label><strong>البريد الإلكتروني</strong></label>
<input type="text" name="email">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="إضافة" name='submit_ar'>
</div>
</fieldset>  
</form> </div>   </article>



</body>