<?php get_header();?>
<div class="section_service">
  <div class="section_inner">
    <div class="page_sectionHead">
      <h1 class="sectionHead_title"><span><?php the_title(); ?></span></h1>
    </div>
    <?php get_template_part("template-parts/breadcrumbs"); ?>
    <div class="editor">
      <div class="editor_inner">
        <?php
        if (have_posts()):while(have_posts()):the_post();
          the_content();
        endwhile; endif;
         ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>
