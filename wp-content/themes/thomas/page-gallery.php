<?php
/*
Template Name: Gallery
*/

get_header(); ?>

<div id="content" class="page-gallery" role="main">


<?php
global $post;
$category_id = get_post_custom();

$args = array(  'category' => $category_id["category"][0], 'orderby' => 'post_date','order' => 'ASC', );

$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
  <?  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(230,230) ); ?>
  <div class="hexagon hexagon1">
      <div class="hexagon-in1">
      	<a id="tattoo-<?=$post->ID?>" name="modal" href="<?php the_permalink(); ?>">
            <div class="hexagon-in2" style="background-image: url(<?=$image_url[0]?>); ">
              <span class="hex-hover"></span>
            </div>
      	</a>
      </div>
  </div>
<?php endforeach; ?>

</div>
<div id="response_modal" class="modal hide fade" style="display:none"></div>
<?php get_footer(); ?>
