<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>平成不動産</title>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/styles.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" sizes="46x46" />
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/perfect-scrollbar.js"></script>
  </head>
  <body>
    <header class="gHeader">
      <div class="gHeader_inner">
        <figure class="gHeader_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="LOGO"></a></figure>
        <div class="gNav">
          <div class="gNav_inner">
            <?php
            $args = array(
              "menu_class" => "gNav_list",
              "container" => false,
              "item_wrap" => "<ul class=\"%2$s\">%3$s</ul>",
              "add_li_class" => "gNav_item",
            );
            wp_nav_menu($args);
             ?>
          </div>
        </div><!-- /.gNav -->
        <div class="gHeader_contact">
          <div class="gHeader_contact_inner">
            <a href="/contact/index.php">お問い合わせ</a>
          </div>
        </div>
      </div>
    </header>
    <header class="sp-gHeader">
      <div class="sp-gHeader_inner">
        <figure class="sp-gHeader_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="LOGO"></a></figure>
        <div class="toggle"><a href="javascript:void(0)">menu</a></div>
        <nav class="gNav">
          <div class="gNav_inner">
                <?php
                $args = array(
                  "menu_class" => "gNav_list",
                  "container" => false,
                  "item_wrap" => "<ul class=\"%2$s\">%3$s</ul>",
                  "add_li_class" => "gNav_item",
                );
                wp_nav_menu($args);
                 ?>
                 <ul class="gNav_list" style="background-color: #0f0e0e80; width:70%; border: solid white; height: 42px; margin: 10px auto 10px auto; padding-bottom: 10px;">
                   <li class="gNav_item" style="background-color: #00800000; margin-top: 0px;"><a href="contact" style="color: white;">お問い合わせ</a></li>
                 </ul>
          </div>
        </nav><!-- /.gNav -->
        <!-- <div class="gHeader_contact"><a href="">Contact</a></div> -->
      </div>
    </header>
