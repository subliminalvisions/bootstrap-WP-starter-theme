<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootstrapwpx
 */

get_header(); ?>

<!-- MAIN CONTENT
	================================================== -->
	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">
		<?php while (have_posts()):
    the_post();

    get_template_part("template-parts/content", get_post_type());

    the_post_navigation([
      "prev_text" =>
        '<span class="nav-subtitle">' .
        esc_html__("Previous:", "bootstrapwpx") .
        '</span> <span class="nav-title">%title</span>',
      "next_text" =>
        '<span class="nav-subtitle">' .
        esc_html__("Next:", "bootstrapwpx") .
        '</span> <span class="nav-title">%title</span>',
    ]);

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
      comments_template();
    endif;
  endwhile;
// End of the loop.
?>

			</main><!-- #main -->
		</div>
	</div>

<?php
get_sidebar();
get_footer();

