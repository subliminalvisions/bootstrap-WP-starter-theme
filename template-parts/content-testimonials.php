<?php 
// no vars for section, just a loop  
?>

<!-- TESTIMONIALS
================================================== -->
<section id="kudos">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-8 col-sm-offset-2">
				<h2>What People Are Saying About Stephen</h2>
					<?php $loop = new WP_Query([
	"post_type" => "testimonial",
	"orderby" => "post_id",
	"order" => "ASC",
  ]); ?>
										 <?php while ($loop->have_posts()):
		  $loop->the_post(); ?>
						 <!-- TESTIMONIAL -->
						 <div class="row testimonial">
							 <div class="col-sm-4">
								 <?php if (has_post_thumbnail()) {
		the_post_thumbnail();
	  } ?>
								 <!-- feature img  -->
							 </div>
							 <div class="col-sm-8">
								 <blockquote>
									 <?php the_content(); ?>
									 <cite>&mdash; <?php the_title(); ?></cite>
								 </blockquote>
							 </div>
						 </div>
										 <?php
		endwhile;
		wp_reset_query();
		 ?>					
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- kudos -->
	