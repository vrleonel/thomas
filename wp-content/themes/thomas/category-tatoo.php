<?php
get_header(); ?>

<div id="content" class="single-gallery" role="main">

  <?php
    if (have_posts()) : while (have_posts()) : the_post(); 
    ?>
    <h2><? the_title( ); ?></h2>
    <?php the_content(); ?>

   

  <?php endwhile; else: endif; ?>

</div><!-- #content -->

<?php get_footer(); ?>
