<?php 
include('includes/header.php'); 
require('includes/config.php');
  //TESTESTSETSTEESESTESES 
if(isset($_POST['submit'])){   
$cat=$_POST['category'];
$name=$_POST['name'];
$email= $_POST['email'];
$question=$_POST['question'];
//array to check form if its empty
    
    
if(check(array($name , $email , $question , $cat))){
 
    $msg = error("يرجى إكمال البيانات");
}
   
 
else{
    $query=query("insert into asked_questions_ar values ('' , '$name','$email','$question','','$cat')");
confirm($query);
     $msg= success("تم إرسال السؤال وسيتم التواصل معك في اقرب وقت");
}
 }
?> 
<head>
<style>

select{ 
    width:100%;
    display: block; 
    padding:10px;
    border:2px solid #7FAF48;
    margin-bottom: 30px;
    border-radius:5px;     
    }
	
input[type="text"] , textarea{
        display: block; 
        padding:10px;
        width:100%;
        border:2px solid #7FAF48;
        margin-bottom: 30px;
        border-radius:5px; 
    }
	
form{
        width:900px;
        margin:100px auto;
        border:2px solid #7FAF48;
        padding:60px;    
        background: #ddd;
    }
	
input[type="submit"]{
        background:#3053b5;
        color: white;
        padding:10px;
        border-radius:5px;
        width:10%;
        letter-spacing:2px;        
    }
</style>
<title>تواصل معنا</title>
</head>
<body>
<div class="container">

<form method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<h1>تواصل معنا</h1> 
<?php echo $msg; ?>
<label ><strong>الاسم</strong></label><input type="text" name="name">
<label ><strong>البريد الإلكتروني</strong></label><input type="text" name="email"> 
<label ><strong>الرسالة</strong></label><textarea name="question" rows="8" cols="50"></textarea>
<select name="category">
       <option value='1'>يرجى إختيار القسم</option>
       <option value="1">عام</option>
       <option value="2">المواد الدراسية</option>
       <option value="3">الموظفين</option>
</select>
<input type="submit" value="إرسال" name="submit">
 </form>     
</div>
</body>
<?php include('includes/footer.php'); ?>
