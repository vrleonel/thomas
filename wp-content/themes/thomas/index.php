<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="container">
	
	<div id="content" role="main">
		
		<h1 class="logo">THOMAS HOOPER</h1>
		
		<h3>WELCOME</h3>

		<div class="vertical-line"></div>

		<p>
			Oct. 13th — <br>
			<strong>“Origins of Solitude” Exhibition</strong>
		</p>
		<p>
			at Nepenthes New York
			307 West 38th St. New York, NY 10018
			212 643 9540
		</p>

		<a href="#">READ MORE</a>



	<?php
	/* Run the loop to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-index.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'index' );
	?>
	</div><!-- #content -->
</div><!-- #container -->


<?php get_footer(); ?>
