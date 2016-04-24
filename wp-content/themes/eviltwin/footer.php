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
				<?php dynamic_sidebar('Left Footer'); ?>
			</div>
			<p class=" copyright footer_content">&copy;Copyright 2016 Shannon Cox</p>
	</footer>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/gallery.js"></script>

<?php wp_footer(); ?>

</body>
</html>
