<?php
	get_header();

	$cat = get_categories();
?>

<div id="content" class="single-gallery" role="main">

	<div class="nav-links">
  	<span class="prev"><?= previous_post_link( "%link", "" , true); ?></span>
  	<span class="close"><a href="<?=get_home_url() . '/' . $cat[1]->slug ?>" title="Close" rel="modal" ></a></span>
  	<span class="next"><?= next_post_link( '%link', '', true ); ?></span>
  	<div class="nav-label"></div>
	</div>

  <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>

    <span class="scroll-up"></span>
    <span class="scroll-down"></span>
		<div class="post-gallery">
		    <?php the_content(); ?>
		</div>


  <?php endwhile; else: endif; ?>

</div>

<?php get_footer(); ?>
