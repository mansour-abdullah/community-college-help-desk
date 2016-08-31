<?php 

if(isset($_POST['insert'])){  
$id = $_POST['id'];  
$cat=$_POST['category'];
$ans=$_POST['ans'];
$question=$_POST['question'];

    $query=query("insert into fqa_en values ('' , '$question','$ans','$cat')");
     confirm($query);  
    $query_del = query("DELETE FROM asked_questions_en WHERE id = '$id' ");
 confirm($query_del);
 

}
elseif(isset($_GET['del_id'])){  
$id = $_GET['del_id'];
$query = query("DELETE FROM asked_questions_en WHERE id = '$id' ");
 confirm($query);
 
 
}     
?>
<head>
<title>Asked Questions</title>
</head>
<body>

<h1>Asked Questions</h1>
<?php echo $msg; ?>

<hr>
<table id="ad-tb">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Question</th>
<th>Answer</th>
<th>Category</th>
<th>Insert</th>
<th>Delete</th>         
</tr>
<?php
get_contact("en");
?>   
</table>
</body> 