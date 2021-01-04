<?php get_header() ?>
<?php
if (have_posts()):while(have_posts()):the_post();
 ?>

<p>singleページ</p>
<?php the_title(); ?>
<?php the_content(); ?>
<?php echo __FILE__ ; ?>
<p>single</p>
<?php endwhile; endif; ?>
<?php get_sidebar() ?>
<?php get_footer() ?>
