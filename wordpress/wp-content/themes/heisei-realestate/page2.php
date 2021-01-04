<?php

/**
*Template Name: テスト用テンプレート
*Description: テスト用用テンプレート
*/

 ?>

<?php get_header() ?>
<?php
if (have_posts()):while(have_posts()):the_post();
 ?>

<p>固定ページ</p>
<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>
<?php get_footer() ?>
