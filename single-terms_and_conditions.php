<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AssetWise
 */

get_header(); ?>
  <style>
    #single-ters-and-conditions {
        padding-top: 3em;
        padding-bottom: 3em;
    }
  </style>
  </style>
	<div id="single-ters-and-conditions" class="container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
