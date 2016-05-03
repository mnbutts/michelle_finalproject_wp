<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package eviltwin
 */

?>


	<article>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="aboutme page_container">
		<!-- 	<div class="about_me_feature">
				<?php the_post_thumbnail(); ?>
			</div> -->
			<div class="aboutme_content page_content">
				<?php 
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sanctuary_wk5' ),
					'after'  => '</div>',
					) );
			?></div>
			<div class="clear"></div>
		</div><!-- .entry-content -->
		<div class="clear">&nbsp;</div>
		<section class="slider">
			<?php 

				$images = get_field('about_me_gallery');

				if( $images ): ?>
				    <div id="slider" class="flexslider">
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                    <p><?php echo $image['caption']; ?></p>
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				    <div id="carousel" class="flexslider">
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li>
				                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				<?php endif; ?>
		</section>

</article><!-- #post-## -->
