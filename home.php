<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="home_archive home_mobile">
			<?php 
			$page_id = 113;
			$page_object = get_page( $page_id );
			echo $page_object->post_content;
			?>
			</div>
			<div class="home_archive home_mobile">
				<h2>RECENT ARTICLES</h2>
				<?php
				$args = array (
					'posts_per_page'         => '6',
				);			
				$archive = new WP_Query( $args );
				while($archive->have_posts()) : $archive->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h3 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="entry-thumbnail">
								<?php the_post_thumbnail('small-thumbnail'); ?>
							</div>
						<div class="entry-content">
						<?php
						$excerpt_length = 80;
						$blog_excerpt = get_the_excerpt();
						$text = strip_tags($blog_excerpt);
						if (strlen($text) > $excerpt_length) {
							echo $text = substr( $text, 0, $excerpt_length - 3 ).'...';
						} else {
							echo $text;
						}
							?>
						</div><!-- .entry-content -->
					</article><!-- #post -->
					<hr />	
			<?php 
			endwhile; // end of the loop.
			?>					
			</div>
			<div class="home_archive home_gallery">
				<div id="slider">
				<?php //dynamic_content_gallery(); ?>
				<?php
				$args = array (
					'posts_per_page'         => '5',
					'category__not_in'			 => '13'
				);			
				$archive = new WP_Query( $args );
				while($archive->have_posts()) : $archive->the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'home-slider' ); ?></a>
					<div class="blurb">
					<h3 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="entry-content">
						<?php
						$excerpt_length = 250;
						$blog_excerpt = get_the_excerpt();
						$text = strip_tags($blog_excerpt);
						if (strlen($text) > $excerpt_length) {
							echo $text = substr( $text, 0, $excerpt_length - 3 ).'...';
						} else {
							echo $text;
						}
							?>
						</div><!-- .entry-content -->
					</div><!-- .blurb -->
				</article><!-- #post -->	
			<?php 
			endwhile; // end of the loop.
			?>
				</div>
			</div>
			<div class="home_archive home_archive_left">
				<h2>NEWS / ANNOUNCEMENTS</h2>
				<?php
				$cat_name = 'news';
				$cat_id = get_cat_ID( $cat_name );
				$cat_link = get_category_link( $cat_id );					
				$args = array (
					'category_name'         	=> $cat_name,
					'posts_per_page'        	=> '4',
					'category__not_in'				=> 870
				);
					$archive = new WP_Query( $args );
					while($archive->have_posts()) : $archive->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
								<h3 class="entry-title"><a href="<?php echo $news_link; ?>"><?php echo $news_title; ?></a></h3>
								<div class="entry-thumbnail">
									<a href="<?php echo $news_link; ?>">
									<?php the_post_thumbnail('small-thumbnail'); ?>
									</a>
								</div>
							<div class="entry-content">
							<?php
							$excerpt_length = 125;
							$blog_excerpt = get_the_excerpt();
							$text = strip_tags($blog_excerpt);
							if (strlen($text) > $excerpt_length) {
								echo $text = substr( $text, 0, $excerpt_length - 3 ).'...';
							} else {
								echo $text;
							}
							?>
							</div><!-- .entry-content -->
						</article><!-- #post -->
						<hr />
			<?php 
			endwhile; // end of the loop.
			?>
			<p><a href="<?php echo $cat_link; ?>">Read More Posts From News / Announcements</a></p>			
				</div>			
				<div class="home_archive home_archive_right">
				<h2>FROM OUR PRIEST</h2>
				<?php 
				$cat_name = 'from our priest';
				$cat_id = get_cat_ID( $cat_name );
				$cat_link = get_category_link( $cat_id );					
				$args = array (
					'category_name'          => $cat_name,
					'posts_per_page'         => '4',
				);
				$archive = new WP_Query( $args );
				while($archive->have_posts()) : $archive->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h3 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="entry-thumbnail">
								<a href="<?php echo get_permalink(); ?>">
								<?php the_post_thumbnail('small-thumbnail'); ?>
								</a>
							</div>
						<div class="entry-content">
							<?php
							$excerpt_length = 125;
							$blog_excerpt = get_the_excerpt();
							$text = strip_tags($blog_excerpt);
							if (strlen($text) > $excerpt_length) {
								echo $text = substr( $text, 0, $excerpt_length - 3 ).'...';
							} else {
								echo $text;
							}
							?>
						</div><!-- .entry-content -->
					</article><!-- #post -->
					<hr />
			<?php 
			endwhile; // end of the loop.
			?>
			<p><a href="<?php echo $cat_link; ?>">Read More Posts From Our Priest</a></p>			
				</div>			
				<div class="home_archive home_archive_bottom">
				<h2>PHOTO GALLERY</h2>				
				<?php
				$cat_name = 'gallery';
				$cat_id = get_cat_ID( $cat_name );
				$cat_link = get_category_link( $cat_id );					
				$args = array (
					'category_name'          => $cat_name,
						'posts_per_page'         => '10'
					);
					$archive = new WP_Query( $args );
					while($archive->have_posts()) : $archive->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h3 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>						
							<div class="entry-thumbnail">
								<a href="<?php echo get_permalink(); ?>">
								<?php the_post_thumbnail( 'home-gallery' ); ?>
								</a>
							</div>
							<div class="entry-content">
							</div><!-- .entry-content -->
						</article><!-- #post -->
			<?php 
			endwhile; // end of the loop.
			?>
			<p><a href="<?php echo $cat_link; ?>">See More Photo Galleries</a></p>			
				</div>	

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>