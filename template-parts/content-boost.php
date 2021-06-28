<?php 

$boosted_sec_title = get_field("boosted_title");
$boosted_sec_feature_image = get_field("boosted_feature_image"); // image array
$boosted_sec_desc = get_field("boosted_section_description");

$reason_one_title = get_field("reason_one_title");
$reason_one_des = get_field("reason_one_description");
$reason_two_title = get_field("reason_two_title");
$reason_two_des = get_field("reason_two_description");

?>

<!-- Boost SECTION 
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
	

