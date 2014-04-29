<?php
/**
 * The template for displaying Archive pages with gallery as the category
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">
					<?php
						if ( is_category() ) :
							printf( __( '%s Archive', 'tabula-rasa' ), '<span>' . single_cat_title( '', false ) . '</span>' );					

						else :
							_e( 'Archives', 'tabula-rasa' );

						endif;
					?>
				</h1>
				<?php
					if ( is_category() ) :
						// show an optional category description
						$category_description = category_description();
						if ( ! empty( $category_description ) ) :
							echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
						endif;

					elseif ( is_tag() ) :
						// show an optional tag description
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) ) :
							echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
						endif;

					endif;
				?>
				</h1>
			</header><!-- .archive-header -->

			<?php tr_content_nav( 'nav-above' ); ?>

			<?php //not sure about this - custom to keep all archives in one file
			// If a user has filled out their description, show a bio on their entries.
			if ( is_author() ) :
				if ( get_the_author_meta( 'description' ) ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
				<?php endif;
			endif;	?>
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				<?php 
				$args = array(
					'numberposts' => 1,
					'post_mime_type' => 'application/pdf',
					'post_parent' => $post->ID,
					'post_type' => 'attachment',
				);
				$attachments = get_children( $args );	
				if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
						$pdf_link = wp_get_attachment_url( $attachment->ID);
					}
				}
				?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php echo $pdf_link; ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tabula-rasa' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php if ( has_post_thumbnail() && ! post_password_required() && !is_single() ) : ?>				
			<?php endif; ?>			
		</header><!-- .entry-header -->
			<div class="entry-thumbnail">
				<a href="<?php echo $pdf_link; ?>"><?php the_post_thumbnail(); ?></a>
			</div>			
		<div class="entry-summary">
			<?php //the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-meta">		
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
			<?php 
			endwhile;

			tr_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>