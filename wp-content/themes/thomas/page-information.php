<?php
/*
Template Name: Information
*/

get_header(); ?>

<div id="content" class="page-information" role="main">
	
	<section class="description clearfix">
		
		<aside>
			<img src="<?= get_field('description_image')?>" width="405" height="405">
		</aside>
		
		<article>
			<?= get_field("description_text"); ?>
			<p class="adress"><?= get_field("adress"); ?></p>
		</article>
	</section>
	
	<section class="information">
		<div>
			<article>
				<?= get_field("article_1")?>
			</article>
			
			<article>
				<?= get_field("article_2")?>
			</article>
		</div>

		<aside>
			<h4 class="vv">more thomas</h4>
			<?= get_field("aside_articles") ?>
		</aside>
	</section>

</div><!-- #content -->

<?php get_footer(); ?>
