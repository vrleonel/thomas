<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

  ?></title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_directory');?>/css/normalize.css" />
<link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_directory');?>/css/hexagon.css" />
<link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_directory');?>/css/common.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="<? bloginfo('template_directory');?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>


</head>

<? /* Menu */
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





<body <?php body_class(); ?>>
<div id="loading"><div id="sprite"></div></div>
<div id="wrapper" class="hfeed">
  <div id="footer">
    <nav id="navigator">
      <? wp_nav_menu( $main_menu_args ); ?>
      <? wp_nav_menu( $social_menu_args ); ?>
    </nav>
  </div>
  <div id="main">

