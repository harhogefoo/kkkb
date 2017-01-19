<?php
/**
 * The template part for displaying content
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.3.0
 */
if( have_posts() ):
	while( have_posts() ): the_post(); ?>
		<?php get_template_part('template-parts/content_header'); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>

			<div class="ruffie-clearfloats">&nbsp;</div>
		</article>

		<?php if( get_theme_mod( 'entry_meta_tags', true ) && has_tag() ): ?>
			<div class="tags">
				<?php the_tags('', ' ') ?>
			</div>
		<?php endif; ?>
	
		<?php if( is_single() ){
			wp_link_pages( array(
				'before'      => '<div class="pagination"><span class="page-links-title">' . __( 'Pages:', 'ruffie' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ruffie' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		} ?>

		<?php ( !is_page() ) ? get_template_part('template-parts/author_bio') : false; ?>
		
		<?php if ( is_singular( 'post' ) ):
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="screen-reader-text">' . __( 'Next post:', 'ruffie' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true"></span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'ruffie' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		endif; ?>
	
	<?php endwhile; ?>

<?php else: ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>