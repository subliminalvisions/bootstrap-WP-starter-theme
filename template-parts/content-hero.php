<?php 
// HERO - Custom Fields //
$prelaunch_price = get_post_meta(6, "early_price", true);
$launch_price = get_post_meta(6, "launch_price", true);
$final_price = get_post_meta(6, "final_price", true);

$button_text = get_post_meta(6, "button_text", true);
$course_url = get_post_meta(6, "course_url", true);

?>

<!-- HERO 
================ -->
<section id="hero" data-type="background" data-speed="5">
	<article>
		<div class="container clearfix">
			<div class="row">
				<div class="col-sm-5">
					<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo-badge.png" 
					alt="Bootstrap to WP" class="logo img-responsive">
				</div><!-- END .col -->
				<div class="col-sm-7 hero-text">
					<h1 class="page-title"><?php bloginfo("name"); ?></h1>
					
					<p class="lead">
						<?php bloginfo("description"); ?>
					</p>
					
					<div id="price-timeline">
						<div class="price active">
							<!-- early_price / launch_price/ final_price -->
							<h4>Early Price <small>Ends soon!</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
							
						</div><!-- end price -->
						<div class="price ">
							<h4>Launch Price <small>Coming soon!</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div><!-- end price -->
						<div class="price ">
							<h4>Final Price <small>Coming soon!</small></h4>
							<span><?php echo $final_price; ?></span>

							
						</div><!-- end price -->
					</div>
					<!-- END #price-timeline -->
						<!-- $button_text $course_url -->

					<p> <a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>"  target="_blank" role="button"><span><?php echo $button_text; ?></span></a></p>
					
				</div><!-- END .col -->
				
			</div><!-- END .row -->
		</div>
	</article>
</section>	<!-- END #hero -->
	