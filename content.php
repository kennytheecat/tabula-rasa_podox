<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<?php 
		//weekly bulletin modifications
		if ( in_category( 'weekly-bulletin' ) ) { 
			$news_title = get_the_title();								
			$news_title = $news_title . ' Weekly Bulletin';
		} else {
			$news_title = get_the_title();	
		}
		if ( in_category( 'weekly-bulletin' ) || in_category( 'newsletter' ) ) {
			$args = array(
				'numberposts' => 1,
				'post_mime_type' => 'application/pdf',
				'post_parent' => $post->ID,
				'post_type' => 'attachment',
			);
			$attachments = get_children( $args );	
			if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
					$news_link = wp_get_attachment_url( $attachment->ID);
				}
			}									
		} else {											
			$news_link = get_permalink();										
		}
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php echo $news_link; ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tabula-rasa' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo $news_title; ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php if ( has_post_thumbnail() && ! post_password_required() && !is_single() ) : ?>
			<div class="entry-meta">
			<?php tr_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->				
			<div class="entry-thumbnail">
				<a href="<?php echo $news_link; ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
				</a>
			</div>		
			<?php endif; ?>			
			
			<?php //if ( comments_open() ) : ?>
				<!--<div class="comments-link">
					<?php //comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'tabula-rasa' ) . '</span>', __( '1 Reply', 'tabula-rasa' ), __( '% Replies', 'tabula-rasa' ) ); ?>
				</div><!-- .comments-link -->
			<?php //endif; // comments_open() ?>
			<?php if ( is_single() ) { ?>
			<div class="entry-meta">
			<?php tr_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
			<?php } ?>
		</header><!-- .entry-header -->

		<?php if ( is_single() && has_post_thumbnail() ) { ?>	
		<?php } ?>
		
		<?php if ( !is_single() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php if ( in_category( 'weekly-bulletin' ) || in_category( 'newsletter' ) ) { } else { ?>
			<?php
			$excerpt_length = 290;
			$blog_excerpt = get_the_excerpt();
			$text = strip_tags($blog_excerpt);
			if (strlen($text) > $excerpt_length) {
				echo $text = substr( $text, 0, $excerpt_length - 3 ).'...';
			} else {
				echo $text;
			}
			?>
			<?php } ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tabula-rasa' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabula-rasa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php //tr_entry_meta(); ?>
			<?php //edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
			<?php //if ( comments_open() && ! is_single() ) : ?>
				<!--<div class="comments-link">
					<?php //comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'tabula-rasa' ) . '</span>', __( 'One comment so far', 'tabula-rasa' ), __( 'View all % comments', 'tabula-rasa' ) ); ?>
				</div><!-- .comments-link -->
			<?php //endif; // comments_open() ?>			
			<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
