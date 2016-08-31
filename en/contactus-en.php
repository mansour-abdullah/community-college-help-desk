<?php 
include ('../includes/header-en.php'); 
if(isset($_POST['submit'])){   
$cat=$_POST['category'];
$name=$_POST['name'];
$email= $_POST['email'];
$question=$_POST['question'];
    
if(check(array($name , $email , $question , $cat))){
 
    $msg = error("Please fill out the form below");
}
   
 
else{
    $query=query("insert into asked_questions_en values ('' , '$name','$email','$question','','$cat')");
confirm($query);
     $msg= success("Your Question has been submitted successfully");
}
 }
?>
<style>

input[type="text"] , textarea,select{
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
        width:10%;}
    /****alert box ***/
.error{
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;  
} 
.success{

    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;


}
</style>
<title>Contact us</title>
<body>
<div class="container">
<form method="post" action=''>
<h1>Send us your Question ...</h1> 
<?php echo $msg; ?>
<label ><strong>Name</strong></label><input type="text" name="name">
<label ><strong>Email</strong></label><input type="text" name="email"> 
<label ><strong>Question</strong></label><textarea name="question" rows="8" cols="50"></textarea>
<select name="category">
            <option>Choose Category</option>
            <option value="1">General</option>
            <option value="2">Courses</option>
            <option value="3">Staff</option>
</select>
<input type="submit" value="Submit" name="submit">
</form>     
</div>
</body>
<?php include('../includes/footer-en.php'); ?>
