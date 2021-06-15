<?php
/**
 * header for theme
 *
 * the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrapwpx
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap core -->
	<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet">

	<link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;0,500;0,600;0,700;1,200;1,500;1,600;1,700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lte IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrapwpx' ); ?></a>

	<!-- Header  
		================ -->
		<header class="site-header" role="banner">
			<div class="navbar-wrapper">
				<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" 
							toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand" href="/" >
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="Bootstrap for WP" class="logo ">
							</a>
						</div><!-- END div.navbar-header -->
												
						<?php 
						wp_nav_menu( array(
							'' => 'primary',
							'container'	=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'container_class'	=> 'nav navbar-nav navbar-right ',
							)
						)
					?>

					</div>
					
				</div>
				<!-- END div.navbar -->
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <div class="container-fluid">
						<a class="navbar-brand" href="#">Navbar</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
							  <a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							  </a>
							  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							  </ul>
							</li>
							<li class="nav-item">
							  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
							</li>
						  </ul>
						  <form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						  </form>
						</div>
					  </div>
					</nav> -->
			</div>
			
		</header>
