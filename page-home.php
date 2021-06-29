<?php
/*
	Template Name: Home Page
*/
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

get_header();
?>

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/content', 'hero' ); ?>
		<?php get_template_part( 'template-parts/content', 'optin' ); ?>
		<?php get_template_part( 'template-parts/content', 'boost' ); ?>
		<?php get_template_part( 'template-parts/content', 'whobenefits' ); ?>
		<?php get_template_part( 'template-parts/content', 'coursefeatures' ); ?>
		<?php get_template_part( 'template-parts/content', 'projectfeatures' ); ?>
		<?php get_template_part( 'template-parts/content', 'featurette' ); ?>
		<?php get_template_part( 'template-parts/content', 'instructor' ); ?>
		<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

	</main><!-- #main -->

<?php get_footer();
