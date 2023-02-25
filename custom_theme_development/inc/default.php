<?php
// Theme Function
function my_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-formats', ['aside', 'gallery', 'image', 'video', 'audio', 'link']);
  add_theme_support('post-thumbnails', array('page', 'post', 'service', 'slider', 'project'));
  add_image_size('custom_size', 970, 450, 'true');
  add_image_size('service', 400, 350, 'true');
}
add_action('after_setup_theme', 'my_theme_support');

// Menu Register
register_nav_menus(array(
  'main_menu' => 'Main Menu',
  'footer_menu'   => 'Footer Menu',
  'sidebar_menu'  => 'Sidebar Menu',
));



// Pagenav Function
function ali_pagenav()
{
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $args['total'] = $max;
  $args['current'] = $current;
  $total = 1;
  $args['prev_text'] = 'Prev';
  $args['next_text'] = 'Next';
  if ($max > 1) echo '</pre>
      <div class="wp_pagenav">';
  if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span>of</span>' . $max . '</p>';
  echo $pages . paginate_links($args);
  if ($max > 1) echo '</div><pre>';
}
