<?php include('includes/header.php'); ?>
<head>  
<title>الصفحة الرئيسية</title>  
<style>
.sections div{
    display: inline-block; 
    box-sizing: border-box;
    padding: 20px;
	width:400px;
    border:2px solid #7FAF48;
    background: #E0E0E0;
	margin:59px;  
}
.sections div img{width:300px;height: 150px }
.sections div button{
    float: left;
    margin-top: 25px;
    padding:10px;
    background:#7FAF48;
    border-radius: 5px;
    border:none 

}
.sections div button:hover{text-decoration: underline}
.sections div a button{text-decoration:none;color:white }
.sections div h3 {
    display: inline-block;
    font-size:25px;
    margin: 30px 0 0 0px; 
 font-family:Arial;
    font-weight:bold; 
}   
</style> 
</head>   
<div class="clearfix"></div>
<div class="container">
<!--sections-->
<div class="sections">
<div> 
<center> <img src="images/campus.jpg"></center> 
<h3>مبنى الكلية</h3>
<a href="campus-arabic.php"><button>دخول</button></a> 
</div>
<div>
<center><img src="images/gg.png"> </center> 
<h3>لوحة الإعلانات</h3>
<a href="noticeboard-arabic.php"><button>دخول</button></a>
</div>
<div>
<center><img src="images/qus.png"> </center>
<h3>الأسئلة المكررة</h3> 
<a href="fqa-arabic.php"><button>دخول</button></a>  
</div>
 <div>
<center><img src="images/tools.png"> </center>
<h3>أدوات مساعدة</h3>
<a href="tools-arabic.php"><button>دخول</button></a>       
</div>
</div> 
			 
</div>
<?php include('includes/footer.php'); ?>