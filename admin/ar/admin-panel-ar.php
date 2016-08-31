<?php
require('../../includes/config.php');
session_start();
if(!isset($_SESSION['userloged'])){
header("Location:login.php");	 
 }

?> 
 
    <html lang="en">

    <head>
    <meta charset="utf-8"/>
    <title>Dashboard  Admin Panel</title>

    <link rel="stylesheet" href="css/layout-ar.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    </head>


    <body>

    <header id="header">
    <hgroup>
    <h1 class="site_title">Website Admin</h1>
    <h2 class="section_title"><a href="admin-panel-ar.php">لوحة التحكم/ الإحصائيات</a></h2><div class="btn_view_site"><a href="../../index.php">View Site</a>
    

    </div>
    </hgroup>
    </header> <!-- end of header bar -->

    <section id="secondary_bar">
    <div class="user">

    <p> Admin : <?php echo $_SESSION['userloged'] ?> : 	  <a class="" href="logout.php">Logout</a> </p>

    </div>
    <div class="breadcrumbs_container">
    <article class="breadcrumbs"><a href="../admin-panel.php">English</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
    </div>
    </section><!-- end of secondary bar -->

    <aside id="sidebar" class="column">

    <hr/>
    <h3>الأسئلة </h3>
    <ul class="toggle">
    <li class="icn_new_article"><a href="admin-panel-ar.php?page=fqa-ar&cat=1">عام</a></li><li class="icn_new_article"><a href="admin-panel-ar.php?page=fqa-ar&cat=2">المواد الدراسية </a></li><li class="icn_new_article"><a href="admin-panel-ar.php?page=fqa-ar&cat=3"> الموظفين </a></li>
    <li class="icn_edit_article"><a href="admin-panel-ar.php?page=contacts">التواصل </a></li>
     <li class="icn_edit_article"><a href="admin-panel-ar.php?page=add-new-question">إضافة سؤال جديد </a></li>
    </ul>
    <h3>لوحة الإعلانات </h3>
    <ul class="toggle">
    <li class="icn_add_user"><a href="admin-panel-ar.php?page=noticeboard-ar">الإعلانات </a></li>
    <li class="icn_view_users"><a href="admin-panel-ar.php?page=new-event">إضافة إعلان جديد </a></li>
 
    </ul>
    <h3>مبنى الكلية </h3>
    <ul class="toggle">
    <li class="icn_folder"><a href="admin-panel-ar.php?page=campus-ar">المباني</a></li>
    <li class="icn_photo"><a href="admin-panel-ar.php?page=add-campus">إضافة مبنى جديد    </a></li>
  
    </ul>
    <h3>الأدوات  </h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel-ar.php?page=tools-ar">الأدوات  </a></li>
    <li class="icn_security"><a href="admin-panel-ar.php?page=add-tools">إضافة اداة جديدة</a></li>
    
    </ul>    
    
    <h3>الموظفين </h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel-ar.php?page=staff&dept=1">الإدارة</a></li>  
    <li class="icn_settings"><a href="admin-panel-ar.php?page=staff&dept=2">التعليم</a></li>      
    <li class="icn_settings"><a href="admin-panel-ar.php?page=staff&dept=3">الدعم الفني</a></li>
    <li class="icn_security"><a href="admin-panel-ar.php?page=add-staff">إضافة موظف جديد </a></li>
    
    </ul>
   
    <h3>ِ Users / المستخدمين</h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel-ar.php?page=users">Edit / تعديل </a></li>
    <li class="icn_security"><a href="admin-panel-ar.php?page=add-user">Add new user / إضافة مستخدم جديد</a></li>
    
    </ul>

    <footer>
    <hr />
  
    </footer>
    </aside><!-- end of sidebar -->

    <section id="main" class="column width_full">

 <?php
    $current_page = isset($_GET['page']) ? $_GET['page'] : null;

    switch ($current_page) {
        case ('fqa-ar'):
            include 'admin-fqa-ar.php';
            break;
        case ('add-new-question'):
            include '../add-question.php';
            break;
        case ('contacts'):
            include 'admin-contactus-ar.php';
            break; 
        case ('noticeboard-ar'):
            include 'admin-noticeboard-ar.php';
            break;
        case ('new-event'):
            include '../add-event.php';
            break; 
        case ('campus-ar'):
            include 'admin-campus-ar.php';
            break;   
        case ('add-campus'):
            include '../add-campus.php';
            break;   
        case ('tools-ar'):
            include 'admin-tools-ar.php';
            break;
        case ('add-tools'):
            include '../add-tools.php';
            break;    
        case ('staff'):
            include 'admin-staff-ar.php';
            break;            
        case ('add-staff'):
            include '../add-staff.php';
            break;
        case ('users'):
            include '../users.php';
            break;
        case ('add-user'):
            include '../add-user.php';
            break;   
        default:
            include 'homepage_ar.php';
    }
?>
        </section>

    </body>
<script type="text/javascript">
            function ConfirmDelete(id)
      {
          
            if (confirm("هل أنت متأكد من حذف السجل؟"))
               window.location.href = document.URL+'&del_id='+id;
                
      }
        </script>
    </html>
