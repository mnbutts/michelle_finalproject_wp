<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eviltwin
 */

?>

	</div><!-- #content -->

	<footer>
			<div class="social_media footer_content">
				<p class="float_left">FOLLOW ME:</p>
				<i class="fa fa-twitter-square float_left"></i>
				<i class="fa fa-instagram float_left"></i>
				<i class="fa fa-facebook-square float_left"></i>
			</div>
			<p class=" copyright footer_content">&copy;Copyright 2016 Shannon Cox</p>
	</footer>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/gallery.js"></script>

<?php wp_footer(); ?>

</body>
</html>
