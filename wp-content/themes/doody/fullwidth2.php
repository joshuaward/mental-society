<?php
/**
* Template Name: Full Width2
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main card shadow-sm module-border-wrap mb-4">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'image' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
