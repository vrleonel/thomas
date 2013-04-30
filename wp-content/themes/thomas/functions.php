<?
add_filter( 'use_default_gallery_style', '__return_false' );

/* Post Thumbnail */
add_theme_support( 'post-thumbnails' );

/* Add Menus */
add_theme_support('menus');

register_nav_menu('main-menu','Main Menu');
register_nav_menu('social-menu','Social Menu');

function posts_link_attributes_1() {
    return 'class="prev-post"';
}
function posts_link_attributes_2() {
    return 'class="next-post"';
}

/**********************************************
* Cria uma url de acordo com o root           *
***********************************************/
function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

/*
function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );

*/


/* Menu */
$main_menu_args = array(
  'theme_location'  => 'main-menu',
  'container'       => 'div',
  'menu_id'         => 'main-menu',
  'menu_class'      => 'left',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);

$social_menu_args = array(
  'theme_location'  => 'social-menu',
  'container'       => 'div',
  'menu_id'         => 'social-menu',
  'menu_class'      => 'right social-links',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);


?>
