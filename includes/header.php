<?php
 session_start();
 $username="";
 $dashboard="";
 $log="<span><a href='admin/login.php'>Login</a></span> ";
 if(isset($_SESSION['userloged'])){
	 $username="<span> Admin : ".$_SESSION['userloged']."</span>";
	 $log="<span><a href='admin/logout.php'>logout</a></span>  ";
	  $dashboard="<span><a href='admin/admin-panel.php'>Control Panel</a></span> ";
 }
 



?> 
<html>
<head>
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/normalize.css"> 
<link rel="stylesheet" href="css/font-awesome.min.css">     
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
<body>
    <!--Header -->
<header>
      <div class="container">
<span><a href="en/index.php">English</a></span>
<?php
echo $log;
echo  $dashboard;
echo $username;
?>
   
    <center>
<img src="images/h-logo.png" alt="KKU">    
    </center>
    </div>
    
    </header>
    <!--End header-->
    <!--navbar-->
    <nav class="h-nav">
        <a href="index.php"> <img src="images/logo-ar.png" alt="KMCC help desk"></a>
    <ul>
    <li class=""><a href="index.php">الصفحة الرئيسية</a></li>
     <li><a href="staff-info.php">الموظفين</a></li>
     <li><a href="contactus-arabic.php">تواصل معنا</a></li>
    </ul>
    
    
    
    
    </nav>
    <!--end navbar-->
