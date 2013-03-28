<?php
/*
Template Name: Shop
*/

get_header(); ?>

<div id="content" class="page-shop" role="main">
  
  <section class="clearfix">
    
    <aside>
      <img src="<?= get_field('aside_1') ?>" width="405" height="405">
    </aside>
    
    <article>
      <?= get_field('article_1') ?>
    </article>
  </section>

  <section class="clearfix">
    
    <aside>
      <img src="<?= get_field('aside_2') ?>" width="405" height="405">
    </aside>
    
    <article>
      <?= get_field('article_2') ?>
    </article>
  </section>

  <section class="clearfix">
    
    <aside>
      <img src="<?= get_field('aside_3') ?>" width="405" height="405">
    </aside>
    
    <article>
      <?= get_field('article_3') ?>
    </article>
  </section>


</div><!-- #content -->

<?php get_footer(); ?>
