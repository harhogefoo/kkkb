<?php
/**
 * The template part for displaying post meta data
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.1.1
 */
?>
<div class="entry-meta"><?php
	// author link
	if( get_theme_mod( 'entry_meta_author', true ) ){
		printf( '<span><i class="fa fa-user"></i> <a href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
			);
	}
	
	// posted date
	if( get_theme_mod( 'entry_meta_date', true ) ){
		printf( '<span><i class="fa fa-calendar"></i> <a href="%1$s">%2$s</a></span>',
			esc_url( get_permalink() ),
			get_the_date()
		);
	}

	// attachment image dimentions
	if( wp_attachment_is_image() ){
		$metadata = wp_get_attachment_metadata();

		printf( '<span><i class="fa fa-camera"></i> %1$s x %2$s</span>',
			absint( $metadata['width'] ),
			absint( $metadata['height'] )
		);
	}

	// comments
	$ruffie_comments_count = get_comments_number();
	if( get_theme_mod( 'entry_meta_comments', true ) && $ruffie_comments_count > 0 && comments_open() ){
		
		printf( '<span><i class="fa fa-comment-o"></i> <a href="%1$s/#comments">%2$s</a></span>',
			esc_url( get_permalink() ), 
			$ruffie_comments_count
		);
	}

	// post format
	$ruffie_format = get_post_format();
	if ( get_theme_mod( 'entry_meta_post_format', true ) && current_theme_supports( 'post-formats', $ruffie_format ) ):

		switch($ruffie_format){
			case 'gallery':
			case 'image':
				$ruffie_class = 'fa-image';
				break;

			case 'video':
				$ruffie_class = 'fa-file-video-o';
				break;

			case 'quote':
				$ruffie_class = 'fa-quote-right';
				break;

			case 'link':
				$ruffie_class = 'fa-link';
				break;

			case 'status':
				$ruffie_class = 'fa-exclamation';
				break;

			case 'audio':
				$ruffie_class = 'fa-music';
				break;

			case 'chat':
				$ruffie_class = 'fa-comments';
				break;

			default:
				$ruffie_class = 'fa-file-o';
				break;
		}

		printf( '<span class="entry-format"><i class="fa ' . $ruffie_class . '"></i> %1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'ruffie' ) ),
			esc_url( get_post_format_link( $ruffie_format ) ),
			get_post_format_string( $ruffie_format )
		); ?>
	<?php endif; ?>
	
	<?php // categories
	if( get_theme_mod( 'entry_meta_categories', true ) && has_category() ): ?>
		<span>
			<i class="fa fa-folder-o"></i>
			<?php the_category(', '); ?>
		</span>
	<?php endif; ?>

	<?php if( is_user_logged_in() ): // edit link ?>
		<span>
			<i class="fa fa-pencil"></i>
			<?php
				// edit link
				edit_post_link( __('Edit', 'ruffie') ); 
			?>
		</span>
	<?php endif; ?>
</div>