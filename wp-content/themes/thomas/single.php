<?php
get_header(); ?>

<div id="content" class="single-gallery" role="main">

  <?php
    if (have_posts()) : while (have_posts()) : the_post(); 
    ?>
    
    <div class="nav-links">
    	<span class="next"><?= next_post_link( '%link', '>', true ); ?></span>
    	<span class="close"></span>
    	<span class="prev"><?= previous_post_link( "%link", "<" , true); ?></span>
		</div>
    

    <?php the_content(); ?>

   

  <?php endwhile; else: endif; ?>

</div><!-- #content -->

<?php get_footer(); ?>