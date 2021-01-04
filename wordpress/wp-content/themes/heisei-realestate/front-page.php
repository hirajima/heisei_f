<?php
/**
*Template Name: トップページ
*Description: 1カラムレイアウト用テンプレート
*/
 ?>
 <?php get_header(); ?>
 <section class="top">
   <div class="background">
       <div class="top-main">
         <h3 class="main-title-1">松茂町の不動産・賃貸物件について、ご相談ください。</h3>
         <div class="main-title-2">
           <h4 class="main-title-2-text">誠実な対応を心掛けます。</h4>
         </div>
       </div>
   </div>
 </section><!-- /.section -->
 <section class="section">
   <div class="section_inner">
     <div class="sectionHead">
       <h1 class="sectionHead_title"><span>ABOUT</span></h1>
     </div><!-- /.sectionHead -->
     <div class="contents">
       <div class="contents_inner">
           <div class="about">
             <p style="line-height: 1.5;">
                 弊社は、平成２年に設立された不動産会社です。 </br>
                 不動産に関する様々な情報とサービス提供に取り組み、企画開発から設計、施工、販売</br>
                 さらにアフターサービスにいたるまで、皆様方のご要望にお応えしております。 是非一度ご利用ください。</br>
             </p>
           </div>
         </div>
       </div>
     </div><!-- /.newsList -->
   </div>
   </section><!-- /.section -->
   <section class="section_service">
   <div class="section_inner">
     <div class="sectionHead">
       <h1 class="sectionHead_title"><span>Service</span></h1>
     </div><!-- /.sectionHead -->
     <div class="contents">
       <div class="contents_inner">
           <ul class="contents_list">
             <li class="contents_item">
               <a href="/service/index.php#rent" >
                 <figure class="contents_img">
                   <img src="<?php echo get_template_directory_uri() ?>/assets/images/rent.jpg" alt="賃貸仲介業">
                   <div class="black_cover"><span class="contents_title">賃貸仲介業</span></div>
                 </figure>
               </a>
             </li>
             <li class="contents_item">
               <a href="/service/index.php#sales">
                 <figure class="contents_img">
                   <img src="<?php echo get_template_directory_uri() ?>/assets/images/sales.png" alt="土地売買業">
                   <div class="black_cover"><span class="contents_title">土地売買業</span></div>
                 </figure>
               </a>
             </li>
             <li class="contents_item">
               <a href="/service/index.php#house">
                 <figure class="contents_img">
                   <img src="<?php echo get_template_directory_uri() ?>/assets/images/house.png" alt="中古戸建買取業">
                   <div class="black_cover"><span class="contents_title">中古戸建買取業</span></div>
                 </figure>
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div><!-- /.newsList -->
   </div>
   </section><!-- /.section -->
   <section class="newssection">
     <div class="newssection_inner">
       <div class="sectionHead">
         <h1 class="sectionHead_title">News</h1>
       </div><!-- /.sectionHead -->
       <div class="news">
         <div class="news_inner">
           <ul class="news_list">
                 <div class="news_contents">
                   <?php
                   $args = array(
                     "posts_per_page" => 5
                   );
                   $posts = get_posts($args);
                   foreach ($posts as $key => $post):
                     setup_postdata($post);
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
                   endforeach;
                   wp_reset_postdata();
                    ?>
                 </div>
               </li><!-- /.news_item -->
           </ul>
         </div>
       </div><!-- /.newsList -->
       <div class="btns">
         <div class="btns_item"><a href="/news/" class="" style="color: #bfbeb9;">ニュースの一覧へ</a></div>
       </div>
     </div>
   </section><!-- /.section -->
 <?php get_footer(); ?>
