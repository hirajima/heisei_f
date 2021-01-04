<?php get_header() ?>
<div class="section_service">
  <div class="section_inner">
    <div class="page_sectionHead">
      <?php
      $category_id =  get_query_var("cat")? get_query_var('cat') : "データ";
      $category_name = get_category($category_id)->name;
      echo "<h1 class=\"sectionHead_title\"><span>{$category_name}一覧</span></h1></div>";
      set_query_var("title", $category_name. "一覧");
      get_template_part("template-parts/breadcrumbs");
      ?>
    <div class="editor">
      <div class="editor_inner">
        <div class="contents">
            <div class="white_contents_inner" style="margin: 0px;">
              <?php
              $paged =  get_query_var("paged")? get_query_var('paged') : 1;
              $args =[
                "post_type" => array('post'),
                "post_status" => array('publish'),
                "order" => 'desc',
                "orderby" => 'post_date',
                "paged" => $paged,
                "posts_per_page" => 10,
                "category_name" => "news"
              ];
              $wp_query = new WP_Query($args);
              if ($wp_query->have_posts()) :

                while($wp_query->have_posts()): $wp_query->the_post();

                  $link =  get_permalink();
                  $time =  get_the_time('Y年n月j日');
                  $title =  get_the_title();
                  $category_list =  get_the_category();
                  echo "<a href=\"{$link}\"><p class=\"news_date\">{$time}</p>";
                  if ($category_list) {
                    foreach ($category_list as $key => $category_set) {
                      echo "<p class=\"news_label\">{$category_set->name}</p>";
                    }
                  }
                  echo "<p class=\"news_title\">{$title}</p></a>";

                endwhile;
              endif;
              wp_reset_postdata();
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
