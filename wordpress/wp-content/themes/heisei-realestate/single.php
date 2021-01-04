<?php get_header() ?>
 <div class="section_service">
   <div class="section_inner">
     <div class="page_sectionHead">
       <?php
       $title = get_the_title();
       echo "<h1 class=\"sectionHead_title\"><span>{$title}</span></h1></div>";
       set_query_var("title", $title);
       get_template_part("template-parts/breadcrumbs", $title);
       ?>
     <div class="editor">
       <div class="editor_inner">
         <div class="contents">
             <div class="white_contents_inner">
               <?php
               if (have_posts()):while(have_posts()):the_post();
                 if (has_post_thumbnail()) {
                   echo "<figure class=\"results_img\">";
                    the_post_thumbnail();
                   echo "</figure>";
                 }
               the_content();
               endwhile; endif;



                 ?>

             </div>
           </div>
         </div>
     </div>
   </div>
 </div>


<?php get_footer() ?>
