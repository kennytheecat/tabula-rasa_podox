<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'tr_credits' ); ?>
			<p><?php _e("Copyright", 'tabula-rasa'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved", 'tabula-rasa'); ?> &middot; <a href="http://preachersinstitute.com" >Fr. John A. Peck</a> &middot;<?php _e(" Designed by", 'tabula-rasa'); ?> <a href="http://www.logoswebservices.com" >LOGOS Web Services</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>