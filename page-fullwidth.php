<?php 
/* Template Name: Full-width Template */

    $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
    get_header();

?>
<?php if ( has_post_thumbnail() ) { ?>
    <!-- FEATURE IMAGE
    ================================================== -->
    <section class="feature-image feature-image-default" style="backgroun:url('<?php echo $thumbnail_url; ?>'') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    	<h1><?php the_title(); ?></h1>
    </section>
<?php } else { // Fallback image ?>
        <!-- FEATURE IMAGE
    ================================================== -->
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1><?php the_title(); ?></h1>
    </section>
<?php } ?>

<!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<?php while ( have_posts() ) : the_post();  ?>
                    <?php the_content();  ?>
			    	<?php endwhile; // end of the loop ?>
			    </section>
		    	
		    </div><!-- content -->
	    </div><!-- primary -->
    </div><!-- container -->

<?php 
get_footer();
?>
