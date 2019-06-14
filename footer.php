<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container content">
	<div class="row">
		<div class="col span-1-of-4 box">
			<p>66 Riccarton Road<br>Riccarton</p>
		</div>
		<div class="col span-1-of-4 box">
			<p>Christchurch, 8011<br>New Zealand</p>
		</div>
		<div class="col span-1-of-4 box">
			<p>FACEBOOK<br>INSTAGRAM</p>
		</div>
		<div class="col span-1-of-4 box">
			<p>TWITTER</p>
		</div>
	</div>

</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
