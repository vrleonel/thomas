<?php
/*
Template Name: Gallery
*/

get_header(); ?>

<div id="content" class="page-gallery" role="main">


<?php
global $post;
$args = array(  'category' => 2, 'orderby' => 'post_date','order' => 'ASC', );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	    	<a href="<?php the_permalink(); ?>">
	        	<div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);">
	        		<span class="hex-hover"></span>
	        	</div>
	    	</a>
	    </div>
	</div>
<?php endforeach; ?>


	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	    	<a href="">
	        	<div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);">
	        		<span class="hex-hover"></span>
	        	</div>
	    	</a>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

		<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>

	<div class="hexagon hexagon1">
	    <div class="hexagon-in1">
	        <div class="hexagon-in2" style="background-image: url(http://lorempixel.com/230/230);"><span class="hex-hover"></div>
	    </div>
	</div>
	
</div><!-- #content -->

<?php get_footer(); ?>
