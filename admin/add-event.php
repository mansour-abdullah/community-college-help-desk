<?php 
 
 
if(isset($_POST['submit'])){   
$name=$_POST['name'];
$place=$_POST['place'];
$date=$_POST['date'];

if(check(array($name , $place , $date)))
{
   $msg=error("Please fill out the form below");
}
else{
 
 $query=query("insert into notice_board_en values ('' , '$name','$place','$date')");
    confirm($query);
     $msg=success("The event has been added successfully
     to the notice board");
}
 }

//arabic
if(isset($_POST['submit_ar'])){   
$name=$_POST['name'];
$place=$_POST['place'];
$date=$_POST['date'];

if(check(array($name , $place , $date)))
{
   $msg_ar=error("يرجى إكمال البيانات");
}
else{
 
 $query=query("insert into notice_board_ar values ('' , '$name','$place','$date')");
    confirm($query);
     $msg_ar=success("تم إضافة الحدث في لوحة الإعلانات");
}
 
}
?>
<head><title>Add</title></head>

<body>

<article class="module width_half ">
<header><h3>Add New Event</h3> </header>

<div class="module_content">
<form method="post" action=<?php $_SERVER['PHP_SELF']; ?>>  

<?php echo $msg ?>
<fieldset>
<label ><strong>Event Name</strong></label><textarea name="name" rows="5" cols="50"></textarea>
</fieldset>
<fieldset>

<label ><strong>Place</strong></label><textarea name="place" rows="5" cols="50"></textarea>
</fieldset>
<fieldset>

<label><strong>Date</strong></label>
<input type="date" name="date">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="Submit" name='submit'>
</div></fieldset></form>  
</div>  </article> 
<!-- arabic-->
<article class="module width_half" style="direction:rtl;">
<header><h3>إضافة حدث جديد</h3> </header>

<div class="module_content">
<form method="post" action=<?php $_SERVER['PHP_SELF']; ?>>  

<?php echo $msg_ar ?>
<fieldset>
<label ><strong>الحدث</strong></label><textarea name="name" rows="5" cols="50"></textarea>
</fieldset>
<fieldset>

<label ><strong>المكان</strong></label><textarea name="place" rows="5" cols="50"></textarea>
</fieldset>
<fieldset>

<label><strong>التاريخ</strong></label>
<input type="date" name="date">
</fieldset>
<fieldset>
<div class="submit_link">
<input type="submit" value="إضافة" name='submit_ar'>
</div></fieldset></form>  
</div>  </article>    
     

   



</body>  