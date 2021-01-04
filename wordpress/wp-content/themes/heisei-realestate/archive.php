<?php get_header() ?>
<div class="section_service">
  <div class="section_inner">
    <div class="page_sectionHead">
      <h1 class="sectionHead_title"><span>ニュース一覧</span></h1>
    </div>
    <?php get_template_part("template-parts/breadcrumbs"); ?>
    <div class="editor">
      <div class="editor_inner">
        <div class="contents">
            <div class="white_contents_inner">
              <?php
              echo get_query_var("paged");
              $args =[
                "category_name" => "name"
              ];
              $wp_query = new WP_Query($args);
              print_r($wp_query);
              // exit();

              // if (have_posts()):while(have_posts()):the_post();
              //
              //   $link =  get_permalink();
              //   $time =  get_the_time('Y年n月j日');
              //   $title =  get_the_title();
              //   $category_list =  get_the_category();
              //
              //   echo "<a href=\"{$link}\"><p class=\"news_date\">{$time}</p>";
              //   if ($category_list) {
              //     foreach ($category_list as $key => $category_set) {
              //       echo "<p class=\"news_label\">{$category_set->name}</p>";
              //     }
              //   }
              //   echo "<p class=\"news_title\">{$title}</p></a>";
              //   echo "<hr>";
              //   endwhile; endif;


                ?>
              <?php
              $args = [
                "screen_reader_text" => "",
                "mid_size" => 5,
                // "type" => "list"
              ];
              the_posts_pagination($args);
               ?>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php get_footer() ?>
