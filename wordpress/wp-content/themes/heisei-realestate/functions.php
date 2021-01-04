<?php

function func_test($e)
{
  echo "{$e}";
}

function webst8_setup()
{
  add_theme_support("post-thumbnails");
  add_theme_support("menus");
  add_theme_support('wp-block-styles');
  // add_theme_support("editor-styles");
  // add_editor_style("style-editor.css");
}
add_action("after_setup_theme", "webst8_setup");
add_filter("nav_menu_css_class", "add_additional_class_on_li", 1, 3);

function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}

// function nxw_setup_thema()
// {
//   // add_theme_support("editor-styles");
//   // add_editor_style("editor-style.css");
// }


 ?>
