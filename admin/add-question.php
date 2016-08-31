<?php 
//require('../includes/config.php');

if(isset($_POST['submit'])){   
$cat=$_POST['category'];
$ans=$_POST['ans'];
$question=$_POST['question'];

if(check(array($question , $ans , $cat))){
   $msg=error("Please fill out the form below");
}
else{
    $query=query("insert into fqa_en values ('' , '$question ?','$ans','$cat')");
confirm($query);
     $msg=success("Your question has been submitted successfully");
}
}
if(isset($_POST['submit_ar'])){   
$cat=$_POST['category'];
$ans=$_POST['ans'];
$question=$_POST['question'];

if(check(array($question , $ans , $cat))){
   $msg_ar=error("يرجى إكمال البيانات");
}
else{
    $query=query("insert into fqa_ar values ('' , '$question ؟','$ans','$cat')");
confirm($query);
     $msg_ar=success("تم إضافة السؤال");
}
}
?> 

<title>Add Question</title>
<body>
 <article class="module width_half">
<header><h3>Add Question</h3></header>
<div class="module_content">
<form method="post" action=<?php $_SERVER['PHP_SELF']; ?>>  
 
<?php echo $msg ?>
<fieldset>
    <label>Question</label><textarea name="question" rows="4" >?</textarea></fieldset>
    <fieldset>
        <label ><strong>Answer</strong></label><textarea name="ans" rows="4" ></textarea></fieldset>
        <fieldset>
<select name="category">
            <option>Choose Category</option>
            <option value="1">General</option>
            <option value="2">Courses</option>
            <option value="3">Staff</option>
            </select></fieldset>
            <fieldset>
               <div class="submit_link">
                <input type="submit" value="Submit" name='submit'>
                </div></fieldset></form>  
     </div>  </article> 
     
 <article class="module width_half" style="direction:rtl">
<header><h3>إضافة سؤال</h3></header>
<div class="module_content">
<form method="post" action=<?php $_SERVER['PHP_SELF']; ?>>
 
<?php echo $msg_ar ?>
<fieldset>
    <label><h4>السؤال</h4></label><textarea name="question" rows="4" ></textarea></fieldset>
    <fieldset>
        <label ><strong>الإجابة</strong></label><textarea name="ans" rows="4" ></textarea></fieldset>
        <fieldset>
<select name="category">
            <option>القسم</option>
            <option value="1">عام</option>
            <option value="2">المواد الدراسية</option>
            <option value="3">الموظفين</option>
            </select></fieldset>
            <fieldset>
               <div class="submit_link">
                <input type="submit" value="إضافة" name='submit_ar'>
                </div></fieldset></form>  
     </div>  </article> 
</body>