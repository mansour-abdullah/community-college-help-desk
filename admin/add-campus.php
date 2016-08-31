<?php 

if(isset($_POST['submit'])){   
$name=$_POST['name'];
$desc=$_POST['descr'];
$image =$_FILES['image']['tmp_name']; 
$map = $_FILES['map']['tmp_name']; 

if(check(array($name , $desc , $image , $map )) ){
$msg=error("Please fill out the form below");
}
else{
$image = addslashes(file_get_contents($image));
$map = addslashes(file_get_contents($map));
$query=query("insert into campus_en values ('' , '$name','$image','$map','$desc')");
confirm($query);
$msg=success("The building has been added successfully");
}
}
if(isset($_POST['submit_ar'])){   
$name=$_POST['name'];
$desc=$_POST['descr'];
$image =$_FILES['image']['tmp_name']; 
$map = $_FILES['map']['tmp_name']; 

if(check(array($name , $desc , $image , $map )) ){
$msg_ar=error("يرجى إكمال البيانات");
}
else{
$image = addslashes(file_get_contents($image));
$map = addslashes(file_get_contents($map));
$query=query("insert into campus_ar values ('' , '$name','$image','$map','$desc')");
confirm($query);
$msg_ar=success("تم إضافة المبنى بنجاح");
}   
}
   
?>

<title>Add New Campus</title>
<body>
<article class="module width_half">

<header><h3>Add New Building</h3> </header>
<div class="module_content">
<form method="post"  action='' enctype="multipart/form-data" >  
<?php echo $msg ?>
<fieldset>
<label ><strong>Bulding Name</strong></label><textarea name="name" rows="8" cols="50"></textarea>
</fieldset>
<fieldset>
<label ><strong>Building Description</strong></label><textarea name="descr" rows="8" cols="50"></textarea>
</fieldset>
<fieldset>
<label><strong>image</strong></label>
<input type="file" name="image">
</fieldset>
<fieldset>
<label><strong>map</strong></label>
<input type="file" name="map">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="Submit" name='submit'>
</div></fieldset></form>       
</div>  </article>   

<article class="module width_half"  style="direction:rtl">

<header><h3>إضافة مبنى جديد</h3> </header>
<div class="module_content">
<form method="post"  action='' enctype="multipart/form-data" >  
<?php echo $msg_ar ?>
<fieldset>
<label ><strong>اسم المبنى</strong></label><textarea name="name" rows="8" cols="50"></textarea>
</fieldset>
<fieldset>
<label ><strong>وصف المبنى</strong></label><textarea name="descr" rows="8" cols="50"></textarea>
</fieldset>
<fieldset>
<label><strong>الصورة</strong></label>
<input type="file" name="image">
</fieldset>
<fieldset>
<label><strong>الخريطة</strong></label>
<input type="file" name="map">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="إضافة" name='submit_ar'>
</div></fieldset></form>       
</div>  </article> 
</body>
