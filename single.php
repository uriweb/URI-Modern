<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package uri-modern
 */

get_header();
?>

	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			if ( ! get_option( 'hide_post_navigation' ) ) {
				the_post_navigation(
					array(
						'prev_text' => 'Previous post',
						'next_text' => 'Next post',
						'in_same_term' => ( null == get_option( 'post_nav_by_taxonomy' ) ) ? true : get_option( 'post_nav_by_taxonomy' ),
					)
				);
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
