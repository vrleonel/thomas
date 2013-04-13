<?php
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
  <div class="logo-v">&nbsp;</div>
  </div><!-- #main -->
  <div id="footer">
    <nav id="navigator">
      <? wp_nav_menu( $main_menu_args ); ?>
      <? wp_nav_menu( $social_menu_args ); ?>
    </nav>
  </div>
</div><!-- #wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.spritely.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.compatibility.js"></script>
<script src="<? bloginfo('template_directory');?>/js/plugins.js"></script>
<script src="<? bloginfo('template_directory');?>/js/main.js?3"></script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
</body>
</html>
