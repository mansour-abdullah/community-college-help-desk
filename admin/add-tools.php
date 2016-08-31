<?php 

if(isset($_POST['submit'])){   
$name=$_POST['name'];
$link=$_POST['link'];
$desc=$_POST['descr'];
$image = $_FILES['image']['tmp_name'];

if(check(array($name , $link , $desc , $image))){
   $msg = error("Please fill out the form below");
}
else{
     $image = addslashes(file_get_contents($image));
    $query=query("insert into tools_en values ('' , '$name','$link','$desc','$image')");
    confirm($query);
    $msg = success("The tool has been added succefully");
 
}

}
//arabic form
if(isset($_POST['submit_ar'])){   
$name=$_POST['name'];
$link=$_POST['link'];
$desc=$_POST['descr'];
$image = $_FILES['image']['tmp_name'];

if(check(array($name , $link , $desc , $image))){
   $msg_ar = error("يرجى إكمال البيانات");
}
else{
     $image = addslashes(file_get_contents($image));
    $query=query("insert into tools_ar values ('' , '$name','$link','$desc','$image')");
    confirm($query);
    $msg_ar = success("تم إضافة الاداة بنجاح");
 
}

}
?>

<title>Add New Tool</title>
<body>
<body>
 <article class="module width_half">
<header><h3>Add Tool</h3></header>
<div class="module_content">
<?php echo $msg; ?>
<form method="post"  action='' enctype="multipart/form-data" >  
<fieldset><label><strong>Name</strong></label>
<input type="text" name='name'>
</fieldset>

<fieldset>
<label ><strong>Link</strong></label>
<input type="text" name='link'>
</fieldset>

<fieldset>
<label><strong>image</strong></label>
<input type="file" name="image">
</fieldset>
<fieldset>
<label ><strong>Description</strong></label>
<textarea name="descr" rows="8" cols="50"></textarea>
</fieldset>
<div class="submit_link">
<input type="submit" value="Submit" name='submit'>
</div>
</form>  
</div> 
</article>

 <article class="module width_half"  style="direction:rtl">
<header><h3>إضافة أداة</h3></header>
<div class="module_content">
<?php echo $msg_ar; ?>
<form method="post"  action='' enctype="multipart/form-data" >  
<fieldset><label><strong>الاسم</strong></label>
<input type="text" name='name'>
</fieldset>

<fieldset>
<label ><strong>الرابط</strong></label>
<input type="text" name='link'>
</fieldset>

<fieldset>
<label><strong>الصورة</strong></label>
<input type="file" name="image">
</fieldset>
<fieldset>
<label ><strong>الوصف</strong></label>
<textarea name="descr" rows="8" cols="50"></textarea>
</fieldset>
<div class="submit_link">
<input type="submit" value="إضافة" name='submit_ar'>
</div>
</form>  
</div> 
</article>    
     
          
               
                    
                         
                              
                                        
</body>