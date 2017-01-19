<?php
/**
 * Template for displaying pages
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */
get_header(); ?>

<?php get_sidebar('above-content'); ?>

<div class="site-content">
	<main>
		<?php get_template_part('template-parts/content'); ?>
		<?php if( comments_open() || get_comments_number() ) comments_template(); ?>
	</main>

	<?php get_sidebar('left'); ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>