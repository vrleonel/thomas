<?php
	get_header();

	$cat = get_categories();


$previous_post = get_adjacent_post(false, '', true);
$next_post = get_adjacent_post(false, '', false);

if ($previous_post):
  $prev_link  = make_href_root_relative(get_permalink($previous_post));
  $prev_title = get_the_title($previous_post) . " | " . get_bloginfo("name");
endif;
if ($next_post):
  $next_link  = make_href_root_relative(get_permalink($next_post));
  $next_title = get_the_title($next_post) . " | " . get_bloginfo("name");
endif;


?>

<div id="content" class="single-gallery" role="main">

	<div class="nav-links">
    <span class="prev">
      <? if($previous_post): ?>
      <a  href="<?= $prev_link ?>" rel="prev" data-open="modal" data-title="<?=$prev_title?>"></a>
      <? endif; ?>
    </span>
    <span class="close"><a href="<?=get_home_url() . '/' . $cat[1]->slug ?>" title="Close" rel="close" ></a></span>

    <span class="next">
      <? if($next_post): ?>
      <a  href="<?= $next_link ?>" rel="next" data-open="modal" data-title="<?=$next_title?>"></a>
      <? endif; ?>
    </span>
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
