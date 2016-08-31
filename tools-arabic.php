<?php 
include('includes/header.php');
require('includes/config.php');
?>
<title>الأدوات</title>
<body>
<div class="container">
<div class="content">
<table class="tools">
<th>الأداة</th>
<th>الاسم</th>
<th>الإستخدام</th>
<th>الرابط</th>
<?php
tools("ar");
?>   
</table>
</div>
</div>
</body>
<?php include('includes/footer.php'); ?>