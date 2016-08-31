<?php
require('../includes/config.php');
session_start();
if(!isset($_SESSION['userloged'])){
header("Location:login.php");	 
 }

?> 
 
    <html lang="en">

    <head>
    <meta charset="utf-8"/>
    <title>Dashboard I Admin Panel</title>

    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    </head>


    <body>
 
    <header id="header">
    <hgroup>
    <h1 class="site_title">Website Admin</h1>
    <h2 class="section_title"><a href="admin-panel.php">Dashboard / STATISTICS</a></h2><div class="btn_view_site"><a href="../index.php">View Site</a>

    </div>
    </hgroup>
    </header> <!-- end of header bar -->

    <section id="secondary_bar">
    <div class="user">

    <p> Admin : <?php echo $_SESSION['userloged'] ?> : 	  <a class="" href="logout.php">Logout</a> </p>

    </div>
    <div class="breadcrumbs_container">
    <article class="breadcrumbs"><a href="ar/admin-panel-ar.php">عربي</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
    </div>
    </section><!-- end of secondary bar -->

    <aside id="sidebar" class="column">

    <hr/>
    <h3>Questions </h3>
    <ul class="toggle">
    <li class="icn_new_article"><a href="admin-panel.php?page=fqa-en&cat=1">General</a></li><li class="icn_new_article"><a href="admin-panel.php?page=fqa-en&cat=2">Courses </a></li><li class="icn_new_article"><a href="admin-panel.php?page=fqa-en&cat=3">Staff</a></li>
    <li class="icn_edit_article"><a href="admin-panel.php?page=contacts">Contactus </a></li>
     <li class="icn_edit_article"><a href="admin-panel.php?page=add-new-question">Add new question </a></li>
    </ul>
    <h3>Notice Board </h3>
    <ul class="toggle">
    <li class="icn_add_user"><a href="admin-panel.php?page=noticeboard-en">Events </a></li>
    <li class="icn_view_users"><a href="admin-panel.php?page=new-event">add new event </a></li>
 
    </ul>
    <h3>Campus </h3>
    <ul class="toggle">
    <li class="icn_folder"><a href="admin-panel.php?page=campus-en">Buildings</a></li>
    <li class="icn_photo"><a href="admin-panel.php?page=add-campus">Add new Building    </a></li>
  
    </ul>
    <h3>Tools  </h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel.php?page=tools-en">Tools  </a></li>
    <li class="icn_security"><a href="admin-panel.php?page=add-tools">Add new tools    </a></li>
    
    </ul>    
    
    <h3>Staff  </h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel.php?page=staff&dept=1">Administration</a></li>  
    <li class="icn_settings"><a href="admin-panel.php?page=staff&dept=2">Faculty</a></li>      
    <li class="icn_settings"><a href="admin-panel.php?page=staff&dept=3">IT</a></li>
    <li class="icn_security"><a href="admin-panel.php?page=add-staff">Add new Staff member </a></li>
    
    </ul>
   
    <h3>ِ Users / المستخدمين</h3>
    <ul class="toggle">
    <li class="icn_settings"><a href="admin-panel.php?page=users">Edit / تعديل </a></li>
    <li class="icn_security"><a href="admin-panel.php?page=add-user">Add new user / إضافة مستخدم جديد</a></li>
    
    </ul>

    <footer>
    <hr />
    <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
    <p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
    </footer>
    </aside><!-- end of sidebar -->

    <section id="main" class="column width_full">

 <?php
    $current_page = isset($_GET['page']) ? $_GET['page'] : null;

    switch ($current_page) {
        case ('fqa-en'):
            include 'admin-fqa-en.php';
            break;
        case ('add-new-question'):
            include 'add-question.php';
            break;
        case ('contacts'):
            include 'admin-contactus-en.php';
            break; 
        case ('noticeboard-en'):
            include 'admin-noticeboard-en.php';
            break;
        case ('new-event'):
            include 'add-event.php';
            break; 
        case ('campus-en'):
            include 'admin-campus-en.php';
            break;   
        case ('add-campus'):
            include 'add-campus.php';
            break;   
        case ('tools-en'):
            include 'admin-tools-en.php';
            break;
        case ('add-tools'):
            include 'add-tools.php';
            break;          
        case ('staff'):
            include 'admin-staff-en.php';
            break;            
        case ('add-staff'):
            include 'add-staff.php';
            break;
        case ('users'):
            include 'users.php';
            break;
        case ('add-user'):
            include 'add-user.php';
            break;  
        default:
            include 'homepage.php';
    }
?>
        </section>

    </body>
<script type="text/javascript">
            function ConfirmDelete(id)
      {
          
            if (confirm("Are your sure you want to delete the record?"))
               window.location.href = document.URL+'&del_id='+id;
                
      }
        </script>
    </html>
