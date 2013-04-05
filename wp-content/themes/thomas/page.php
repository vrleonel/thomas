<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="content" class="page-home" role="main">

    <h1 class="logo-h"></h1>

    <h3 class="vv title-home"><?= get_field("title_home")?></h3>

    <div class="vertical-bar"></div>

    <div class="vertical-line"></div>

    <?= get_field("text_home"); ?>

    <a href="<?= get_field('link_home'); ?>" class="vv">READ MORE</a>


</div><!-- #content -->

<?php get_footer(); ?>
