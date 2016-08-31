       <article class="module width_full">
            <header><h3>STATISTICS</h3></header>
            <div class="module_content">
         
            <article class="module width_quarter">
            <header><h3> <center>Questions STATISTICS</center></h3></header>
            <div class="module_content height ">
                <span><strong>Genereal Questions</strong> : <?php echo stat_fqa(1, "en"); ?> </span> <br>
                <span><strong>Courses Questions</strong> : <?php echo stat_fqa(2, "en"); ?> </span> <br>
                <span><strong>Staff Questions</strong> : <?php echo stat_fqa(3, "en"); ?> </span> <br>
                <span><strong>Unanswerd Questions</strong> : <?php echo stat_contactus("en"); ?> </span><br>
                 <span><strong>Total</strong> : <?php echo (stat_fqa(3, "en")+ stat_fqa(1, "en")+ stat_fqa(2, "en")+stat_contactus("en")); ?> </span>
                 
       

            <div class="clear"></div>
            </div>
            </article>

            <article class="module width_quarter">
            <header><h3> <center>Notice Board STATISTICS</center></h3></header>
            <div class="module_content_height ">
            <?php $events = stat_nb("en"); ?>
           
            <span><strong>Past Events</strong> : <?php echo $events[1]  ?> </span> <br>
            <span><strong>Today Events</strong> : <?php echo $events[2]  ?> </span> <br>
            <span><strong>Upcoming Events</strong> : <?php echo $events[3]  ?> </span> <br>
             <span><strong>Total</strong> : <?php echo $events[0]  ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            
    <article class="module width_quarter">
            <header><h3> <center>Staff STATISTICS</center></h3></header>
            <div class="module_content_height ">
          <span><strong>Administration</strong> : <?php echo staff_stat(1,"en"); ?> </span> <br>
          <span><strong>Faculty</strong> : <?php echo staff_stat(2,"en"); ?> </span> <br>
          <span><strong>IT</strong> : <?php echo staff_stat(3,"en"); ?> </span> <br>
          <span><strong>Total</strong> : <?php echo (staff_stat(1,"en")+staff_stat(2,"en")+staff_stat(3,"en")); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>

            <article class="module width_quarter">
            <header><h3> <center>Campus STATISTICS</center></h3></header>
            <div class="module_content_height ">
          <span><strong>Number of builidings</strong> : <?php echo campus_stat("en"); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <article class="module width_quarter">
            <header><h3> <center>Tools STATISTICS</center></h3></header>
            <div class="module_content_height ">
          <span><strong>Number of tools</strong> : <?php echo tools_stat("en"); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <article class="module width_quarter">
            <header><h3> <center>Users STATISTICS</center></h3></header>
            <div class="module_content_height ">
          <span><strong>Number of users</strong> : <?php echo users_stat(); ?> </span> <br>
            <div class="clear"></div>
            </div>
            </article>
            <div class="clear"></div>













            </div>
            </article><!-- end of stats article -->