 <?php include('../includes/header-en.php');  ?>
<!--Style-->  
<title>Home</title>  
<style>
 /*start sections*/
.sections div{
    display: inline-block; 
    box-sizing: border-box;
    padding: 20px;
    border:2px solid #7FAF48;
    width:400px;    
    background: #E0E0E0;
    margin:59px; 
}
.sections div img{width:300px;height: 150px }
.sections div button{
    float: right;
    margin-top: 25px;
    padding:10px;
    background:#7FAF48;
    border-radius: 5px;
    border:none 

}
.sections div button:hover {text-decoration: underline} 
.sections div a button {text-decoration:none;color:white }
.sections div h3 {
    display: inline-block;
    font-size:22px;
    margin: 30px 0 0 0px; 
	font-family:Arial;
    font-weight:bold; 
}

</style> 
<div class="clearfix"></div>
<div class="container">
<!--sections-->
<div class="sections">
<div> 
<center><img src="../images/campus.jpg"></center> 
<h3>College Campus</h3>
<a href="campus-en.php"><button>Enter</button></a>
</div>
<div>
<center><img src="../images/gg.png"> </center> 
<h3>Notice Board</h3>
<a href="noticeboard-en.php"><button>Enter</button></a>
</div>
<div>
<center><img src="../images/qus.png"> </center>
<h3>Frequnlty Asked <span>Questions</span></h3> 
<a href="fqa-en.php"><button>Enter</button></a>
</div>
 <div>
<center><img src="../images/tools.png"> </center>
<h3>Helpful Tools</h3>
<a href="tools-en.php"><button>Enter</button></a>
</div>
</div> 
</div>
<?php include('../includes/footer-en.php'); ?>