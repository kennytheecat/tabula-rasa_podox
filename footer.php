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
			<?php //do_action( 'tr_credits' ); ?>
			<h3><a href="<?php echo home_url(); ?>/contact/">CONTACT US</a></h3>
			<p><?php _e("Copyright", 'tabula-rasa'); ?> &copy; <?php echo date('Y'); ?> &middot; <a href="http://preachersinstitute.com" >Fr. John A. Peck</a> &middot;<?php _e(" Designed by", 'tabula-rasa'); ?> <a href="http://www.logoswebservices.com" >LOGOS Web Services</a><span class="thirdlaw"><?php _e(" and tweaked a bit by", 'tabula-rasa'); ?> <a href="http://www.third-law.com" >Third Law Web Design</a></span></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if ( in_category('gallery') ) { ?>
		<!--
		<script type='text/javascript'>/* <![CDATA[ */ var portfolioSlideshowOptions = { psFancyBox:true, psHash:false, psThumbSize:'75', psFluid:false, psTouchSwipe:true, psKeyboardNav:true, psBackgroundImages:false, psInfoTxt:'of' };/* ]]> */</script>
		-->
		<!--<script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/scrollable.min.js'></script>-->
		<script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/portfolio-slideshow.min.js'></script>
		<!--<script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/fancybox/jquery.fancybox-1.3.4.pack.js'></script>-->
		<!--<script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/code.photoswipe.jquery-3.0.4.min.js'></script>-->
		<script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/jquery.cycle.all.min.js'></script>
<?php } ?>
		<?php if ( is_home() ) { ?>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#slider').cycle({
					fx: 'scrollHorz',
					timeout:    4000,
					speed:      800,
					next: '#promonav .next',
					pager:    '#promoindex',
					pause: 1
				});
			});	
			</script>
		<?php } ?>
</body>
</html>