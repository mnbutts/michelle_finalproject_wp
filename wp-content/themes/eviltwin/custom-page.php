<?php 
/*
Template Name: Custom
*/
get_header(); ?>
	<body>
			<?php
			while ( have_posts() ) : the_post();
		
				get_template_part( 'template-parts/custom-content', 'page' );

			endwhile; // End of the loop.
			?>
	</body>
<?php get_footer(); ?>
