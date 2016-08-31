<?php

//Add
if(isset($_POST['submit'])){  
  
  $username = $_POST['username']; 
  $pass = $_POST['pass']; 
if(check(array($username , $pass))){
  $msg = error("Please fill out the form below /  يرجى إكمال البيانات");  
    
}
    else{
$query = query("Insert into  admin values ('' , '$username' ,'$pass')");
confirm($query);
$msg = success("The use has been added successfully /  تم إضافة المستخدم بنجاح");  
} 
}






?>
<!--<title>Add User</title>-->
<body>
 <article class="module width_half">

<header><h3>Add User / إضافة مستخدم</h3></header>
<div class="module_content">
 <?php echo $msg; ?>
<form method="post" action=<?php $_SERVER['PHP_SELF']; ?>>  
<fieldset>
    <label>Username / اسم المستخدم</label>
   <input type="text" name='username'>
    </fieldset>
    <fieldset>
    <label>Password / الرقم السري</label>
   <input type="text" name='pass'>
    </fieldset>
      <fieldset>
      <div class="submit_link">
                <input type="submit" value="Submit" name='submit'>
                </div></fieldset>
                </form>  
     </div>  </article> 
</body>
     