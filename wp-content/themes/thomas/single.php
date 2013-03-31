<?php
//get_header(); ?>

<div id="content" class="single-gallery" role="main">

	<div class="nav-links">
  	<span class="prev"><?= previous_post_link( "%link", "" , true); ?></span>
  	<!--<span class="close"><a href="#" title="Close"></a></span>-->
  	<span class="next"><?= next_post_link( '%link', '', true ); ?></span>
  	<div>Next</div>
  	<div>Prev</div>
  	<div>Close</div>
	</div>

  <?php
    if (have_posts()) : while (have_posts()) : the_post(); 
    ?>
    
		<div class="post-gallery">
		    <?php the_content(); ?>
		</div>
   

  <?php endwhile; else: endif; ?>

</div>

<?php //get_footer(); ?>
