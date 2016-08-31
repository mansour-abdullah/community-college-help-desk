<?php
 session_start();
include('config.php');
 $username="";
 $dashboard="";
 $log="<span><a href='../admin/login.php'>Login</a></span> ";
 if(isset($_SESSION['userloged'])){
	 $username="<span> Admin  : ".$_SESSION['userloged']."</span>";
	 $log="<span><a href='../admin/logout.php'>logout</a></span>  ";
	  $dashboard="<span><a href='../admin/admin-panel.php'>Control Panel</a></span> ";
 }
 



?>
<html>
<head>
 <link rel="stylesheet" href="../css/style-en.css">
 <link rel="stylesheet" href="../css/normalize.css"> 
<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
    
<header>
<div class="container">   
<span><a href="../index.php">Arabic</a></span>
<?php
echo $log;
echo  $dashboard;
echo $username;
?>
 
    <center>
<img src="../images/h-logo.png" alt="KKU">    
    </center>
    
    </div> 
    </header>
    <!--header-->
    <nav class="h-nav">
           
        <a href="../en/index.php"> <img src="../images/logo.png" alt="KMCC help desk"></a>
        
    <ul>
    <li class="active"><a href="../en/index.php" >Home</a></li>
         <li><a href="../en/staff-info-en.php">Staff</a></li>
      <li><a href="../en/contactus-en.php">Ask Question</a></li>
          
       
    </ul>
 
       
    
    
    </nav>
