<?php
/*
Template Name: Gallery
*/

get_header(); ?>

<div id="content" class="page-gallery" role="main">

<?php
  global $post;
  $category_id = get_post_custom();
  $args = array( 'posts_per_page'  => -1, 'numberposts' => -1, 'category' => $category_id["category"][0], 'orderby' => 'post_date','order' => 'ASC', );
  $myposts = get_posts( $args );
  $count = 0;
  foreach( $myposts as $post ) :	setup_postdata($post);
    $count++;
?>

  <?
	if(has_post_thumbnail($post->ID) == true){
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(230,230) );
	}else{
		$args = array( 'post_type' => 'attachment',
   								 'numberposts' => -1,
   								 'post_status' => null,
   								 'post_parent' => $post->ID );
		$attachments = get_posts($args);
		$image_url = wp_get_attachment_image_src( $attachments[0]->ID, array(230,230) );
	}
  ?>
  <div class="hexagon hexagon1">
      <div class="hexagon-in1">
      	<a id="tattoo-<?=$post->ID?>" data-open="modal" href="<?php the_permalink(); ?>">
            <div class="hexagon-in2" style="background-image: url(<?=$image_url[0]?>); ">
            </div>
      	</a>
      </div>
  </div>


  <?
    if($count  == 5){ echo '<br>'; }
    elseif($count == 9){ $count = 0; echo '<br>'; }
  ?>

  <?php endforeach; ?>

</div>
<?php get_footer(); ?>
