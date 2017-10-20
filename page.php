<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkAL2017
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row">
		<div class="col">
			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div class="col-3">
			<?php get_sidebar(); ?>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
