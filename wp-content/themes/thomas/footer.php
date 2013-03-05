<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
	
	<nav id="navigator">
		
		<ul class="left">
			<li><a href="#tatoo">tatoo</a> </li>
			<li><a href="#">art</a></li>
			<li><a href="#">painting</a></li>
			<li><a href="#">information</a></li>
			<li><a href="#">blog/news</a></li>
		</ul>
		

		<ul class="right">
			<li><a href="#">e-mail</a></li>
			<li><a href="#">instagram</a> </li>
			<li><a href="#">facebook</a></li>
		</ul>
	</nav>

</div><!-- #wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="<? bloginfo('template_directory');?>/js/plugins.js"></script>
<script src="<? bloginfo('template_directory');?>/js/main.js"></script>

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
