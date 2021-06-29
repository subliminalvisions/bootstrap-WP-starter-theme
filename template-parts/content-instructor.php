<?php 


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


?>
	
<!-- INSTRUCTOR/ Leader 
	================================================== -->
	
	<h1>
	test lead 
	</h1>


	<h2>$leader_section_title - <?php echo $leader_section_title; ?> <small><?php echo $leader_section_name; ?> </small></h2>

	
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
	
	
