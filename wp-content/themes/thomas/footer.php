

  </div><!-- #main -->
  <? if(!is_home()){ ?>
    <a href="<?= get_home_url(); ?>" class="logo-v">&nbsp;</a>
  <? } ?>
</div><!-- #wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.spritely.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.compatibility.js"></script>
<script src="<? bloginfo('template_directory');?>/js/plugins.js"></script>
<script src="<? bloginfo('template_directory');?>/js/main.js?<?= rand(); ?>"></script>

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
