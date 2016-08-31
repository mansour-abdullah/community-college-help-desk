<?php
include('admin-nav.php');
require('../includes/db-ar.php');

$result=mysql_query("SELECT count(*) as total from fqa");
$fqa=mysql_fetch_assoc($result);
 


$result=mysql_query("SELECT count(*) as total from fqa where category='gen'");
$gen=mysql_fetch_assoc($result);
 

$result=mysql_query("SELECT count(*) as total from fqa where category='co'");
$co=mysql_fetch_assoc($result);

$result=mysql_query("SELECT count(*) as total from fqa where category='staff'");
$staff=mysql_fetch_assoc($result);

$result=mysql_query("SELECT count(*) as total from ques");
$ques=mysql_fetch_assoc($result);


?>
<head>
<link rel="stylesheet" href="../css/style.css">
<style>
body{ background:#ddd;}
</style>
<title>إحصائيات الموقع</title>  
</head>
<body>   
<div class="content-h">
<h1> إحصائيات الموقع</h1>
<a href="admin-stat.php"><button id="Add">الأسئلة</button></a>
<a href="campus-stat.php"><button id="Add">المبنى</button></a>
<a href="nb-stat.php"><button id="Add"> لوحة الإعلانات</button></a>
<a href="tools-stat.php"><button id="Add"> الأدوات</button></a>
<a href="staff-stat.php"><button id="Add"> الموظفين</button></a>
<a href="admin-stat-en.php"><button id="Add"> English</button></a>
<hr>
</div>
<center> 
<br/> 
<table id="ad-tb">
<h1>الأسئلة</h1>
<tr>
<th>عام</th>
<th>المواد الدراسية</th>
<th>الموظفين</th>
<th>المجموع</th>
<th>غير المجابة </th>
</tr>  
<?php
 
echo "<tr>" ;   
echo "<td>".$gen['total']."</td>";
echo "<td>".$co['total']."</td>";
echo "<td>".$staff['total']."</td>";
echo "<td>".$fqa['total']."</td>";
echo "<td>".$ques['total']."</td>";
echo "</tr>";  

?>   
</table> 
</center>
</body>  