<?php
/*
	Template Name: Home Page
*/

// Custom Fields //
$prelaunch_price = get_post_meta(6, "early_price", true);
$launch_price = get_post_meta(6, "launch_price", true);
$final_price = get_post_meta(6, "final_price", true);

$button_text = get_post_meta(6, "button_text", true);
$course_url = get_post_meta(6, "course_url", true);
$optin_text = get_post_meta(6, "optin_text", true);
$optin_button_text = get_post_meta(6, "optin_button_text", true);
$boosted_sec_title = get_field("boosted_title");

// Advanced Custom Fields //
$boosted_sec_feature_image = get_field("boosted_feature_image"); // image array
$boosted_sec_desc = get_field("boosted_section_description");
$reason_one_title = get_field("reason_one_title");
$reason_one_des = get_field("reason_one_description");
$reason_two_title = get_field("reason_two_title");
$reason_two_des = get_field("reason_two_description");

$who_feature_image = get_field("who_feature_image");
$who_section_title = get_field("who_section_title");
$who_section_body = get_field("who_section_body");

// Features Section
$features_section_image = get_field("features_section_image");
$features_section_title = get_field("features_section_title");
$features_section_body = get_field("features_section_body");

// project features
$project_feature_title = get_field("project_feature_title");
$project_feature_body = get_field("project_feature_body");

// leader section
$leader_section_title = get_field("leader_section_title");
$leader_section_name = get_field("leader_section_name");
$bio_excerpt = get_field("bio_excerpt");
$full_bio = get_field("full_bio");
$twitter_username = get_field("twitter_username");
$facebook_username = get_field("facebook_username");
$google_plus_username = get_field("google_plus_username");
$num_courses = get_field("num_courses");
$num_reviews = get_field("num_reviews");
$num_of_students = get_field("num_of_students");

get_header();
?>

	<main id="primary" class="site-main">

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
		
		

		
		<div class="row"></div>
		
	<!-- OPT IN SECTION 
	================ -->
	<section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><?php echo $optin_text; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						<!-- Subscribe Now  -->
							<?php echo $optin_button_text; ?>
							
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- optin -->


	<!-- Boost Your Income SECTION 
	================ -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
				
				<!-- if user uploaded an img  -->
					<?php if (!empty($boosted_sec_feature_image)): ?>
				<img src="<?php echo $boosted_sec_feature_image["url"]; ?>" 
				alt="<?php echo $boosted_sec_feature_image["alt"]; ?>">
					<?php endif; ?>
				
				<h2><?php echo $boosted_sec_title; ?></h2>
				
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $boosted_sec_desc; ?></p>
			
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_one_title; ?></h3>
					<p><?php echo $reason_one_des; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo $reason_two_title; ?></h3>
					<p><?php echo $reason_two_des; ?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
	

			
	<!-- WHO BENEFITS
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
								
				<?php if (!empty($who_feature_image)): ?>
				<img src="<?php echo $who_feature_image["url"]; ?>" 
				alt="<?php echo $who_feature_image["alt"]; ?>">
					<?php endif; ?>
					
				<h2><?php echo $who_section_title; ?></h2>
				
			</div><!-- section-header -->

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div><?php echo $who_section_body; ?></div>
				</div><!-- end col -->
			</div><!-- row -->
	
		</div><!-- container -->
	</section><!-- who-benefits -->

	

	<!-- COURSE FEATURES
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">
				
				<?php if (!empty($features_section_image)): ?>
					<img src="<?php echo $features_section_image["url"]; ?>" 
					alt="<?php echo $features_section_image["alt"]; ?>">
				<?php endif; ?>
				
				<h2><?php echo $features_section_title; ?></h2>
				
				<?php if (!empty($features_section_body)): ?>
					<p class="lead"><?php echo $features_section_body; ?></p>
				<?php endif; ?>

			</div><!-- section-header -->
			
			<div class="row">				
				<?php $loop = new WP_Query([
      "post_type" => "home_feature_icon",
      "orderby" => "post_id",
      "order" => "ASC",
    ]); ?>
							<?php while ($loop->have_posts()):
         $loop->the_post(); ?>
								<div class="col-sm-2">						
									<i class="<?php the_field("home_features_icon"); ?>"></i>
									<h4><?php the_title(); ?> </h4>
								</div><!-- end col -->
							<?php
       endwhile; ?>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->

	
	
		
	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
			<h2><?php echo $project_feature_title; ?></h2>
			<p class="lead">
				<?php echo $project_feature_body; ?><
			</p>
			
			<div class="row">
				<!-- <div class="col-sm-4">
					<img src="" alt="Design">
					<h3>Super Modern Design</h3>
					<p>You get to work with a modern, professional quality design &amp; layout.</p>
				</div>
 -->				
			 	<?php $loop = new WP_Query([
       "post_type" => "project_feature",
       "orderby" => "post_id",
       "order" => "ASC",
     ]); ?>
						 <?php while ($loop->have_posts()):
         $loop->the_post(); ?>
		 
		 <div class="col-sm-4"> 
			 <?php if (has_post_thumbnail()) {
      the_post_thumbnail();
    } ?>
			 <h3><?php the_title(); ?></h3>
			 <p><?php the_content(); ?></p>
		 </div>
			   
							
							 <!-- end col -->
						 <?php
       endwhile; ?>
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->

	
	
		
	<!-- VIDEO FEATURETTE
	================================================== -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Watch the Course Introduction</h2>
					<iframe width="100%" height="415" src="http://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->
	

		
	<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $leader_section_title; ?> <small><?php echo $leader_section_name; ?> </small></h2>
						</div><!-- end col -->
							
							<!-- // leader section  -->
							
						<div class="col-lg-4">
							<?php if (!empty($twitter_username)): ?>
							<a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>
							
							<?php if (!empty($facebook_username)): ?>
							<a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>
							<?php if (!empty($google_plus_username)): ?>
							<a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>
							
							
						</div><!-- end col -->
					
					</div><!-- row -->
					
					
					<p class="lead"><?php echo $bio_excerpt; ?><p>
					 
					 <div class="full-bio"><?php echo $full_bio; ?><div>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_of_students; ?> <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_reviews; ?> <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_courses; ?> <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
	

	
		
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
            endwhile; ?>
			
			
					
				</div>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->
	


	</main><!-- #main -->

<?php get_footer();
