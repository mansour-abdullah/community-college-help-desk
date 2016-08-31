<?php include('../includes/header-en.php'); 
require('../includes/config.php');
$db_user= "2";
$db_pass = "2";
$msg = "";
 
if(isset($_POST['Login'])){
$username = $_POST['username'];
$pass = $_POST['pass'];
$query=query("SELECT * FROM admin  where username='$username' and password='$pass'");
confirm($query);
while($row=mysqli_fetch_assoc($query)){
	$db_user = $row['username'];
	$db_pass = $row['password'];
	
	
}
if ( $username === $db_user && $pass === $db_pass){
	session_start();
	$_SESSION['userloged'] = $username;
	header("Location:admin-panel.php");
	
}
else {
	  $msg = error("Username or password is incorrect");
	 	
}
}
?>
<title>Login</title>
<style>
   input{
        
        padding:10px;
        width:100%;
       border:2px solid #7FAF48;
       margin-bottom: 30px;
        border-radius:5px; 
        
    }
    form{
        width:500px;
        margin:100px auto;
      border:2px solid #7FAF48;
        padding:40px;
            
       background: #ddd;
    }
    input[type="submit"]{
        background:#3053b5;
        color: white;
        padding:10px;
        border-radius:5px;
        width:30%;
        
        
    }
</style>
<body>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<h1>LOGIN</h1>
<?php echo $msg ?>
<p><strong>Username</strong> <input type="text" name="username"></p>
<p><strong>Password </strong><input type="password" name="pass"></p>
<center>
<input type="submit" value="Login" name="Login">
</center>
</form>    
</div>
</body>
<?php include('../includes/footer-en.php')  ?>
