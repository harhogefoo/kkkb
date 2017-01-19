<?php
/**
 * Template for displaying a search query
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */
get_header(); ?>

<?php get_sidebar('above-content'); ?>

<div class="site-content">
	<main>
  	<?php get_template_part('template-parts/content_header'); ?>
  	<?php get_template_part('template-parts/loop'); ?>
	</main>

	<?php get_sidebar('left'); ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>