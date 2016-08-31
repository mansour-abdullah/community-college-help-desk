       <article class="module width_full">
            <header><h3>الإحصائيات</h3></header>
            <div class="module_content">
         
            <article class="module width_quarter">
            <header><h3> <center>إحصائيات الأسئلة</center></h3></header>
            <div class="module_content height ">
                <span><strong>الأسئلة العامة</strong> : <?php echo stat_fqa(1, "ar"); ?> </span> <br>
                <span><strong>أسئلة المواد الدراسية</strong> : <?php echo stat_fqa(2, "ar"); ?> </span> <br>
                <span><strong>أسئلة الموظفين</strong> : <?php echo stat_fqa(3, "ar"); ?> </span> <br>
                <span><strong>الأسئلة غير المجابة</strong> : <?php echo stat_contactus("ar"); ?> </span><br>
                 <span><strong>المجموع</strong> : <?php echo (stat_fqa(3, "ar")+ stat_fqa(1, "ar")+ stat_fqa(2, "en")+stat_contactus("ar")); ?> </span>
                 
       

            <div class="clear"></div>
            </div>
            </article>

            <article class="module width_quarter">
            <header><h3> <center>إحصائيات لوحة الإعلانات</center></h3></header>
            <div class="module_content_height ">
            <?php $events = stat_nb("ar"); ?>
           
            <span><strong>أﻷحداث السابقة</strong> : <?php echo $events[1]  ?> </span> <br>
            <span><strong>أحداث اليوم</strong> : <?php echo $events[2]  ?> </span> <br>
            <span><strong>الأحداث القادمة</strong> : <?php echo $events[3]  ?> </span> <br>
             <span><strong>المجموع</strong> : <?php echo $events[0]  ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            
    <article class="module width_quarter">
            <header><h3> <center>إحصائيات الموظفين</center></h3></header>
            <div class="module_content_height ">
          <span><strong>الإدارة</strong> : <?php echo staff_stat(1,"ar"); ?> </span> <br>
          <span><strong>التعليم</strong> : <?php echo staff_stat(2,"ar"); ?> </span> <br>
          <span><strong>الدعم الفني</strong> : <?php echo staff_stat(3,"ar"); ?> </span> <br>
          <span><strong>مجموع الموظفين</strong> : <?php echo (staff_stat(1,"ar")+staff_stat(2,"ar")+staff_stat(3,"ar")); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>

            <article class="module width_quarter">
            <header><h3> <center>إحصائيات المباني</center></h3></header>
            <div class="module_content_height ">
          <span><strong>عدد المباني</strong> : <?php echo campus_stat("ar"); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <article class="module width_quarter">
            <header><h3> <center>إحصائيات الأدوات</center></h3></header>
            <div class="module_content_height ">
          <span><strong>عدد الأدوات</strong> : <?php echo tools_stat("ar"); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <article class="module width_quarter">
            <header><h3> <center>إحصائيات المستخدمين</center></h3></header>
            <div class="module_content_height ">
          <span><strong>عدد المستخدمين</strong> : <?php echo users_stat(); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <div class="clear"></div>













            </div>
            </article><!-- end of stats article -->