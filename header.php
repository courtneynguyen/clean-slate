<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title('');  ?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head();

	?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
	<div class="NavigationBar">
		<div class="container">
		<div class="row">
			<div id="brand" class="col-xs-4">
				<header class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
						<?php bloginfo( 'name' ); // Display the blog name ?></a>
				</header>
			</div>
			<div class="col-sm-8">
				<button class="mobile-menu-button navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
					<span class="hamburger"></span>
					<span class="hamburger"></span>
					<span class="hamburger"></span>
				</button>
				<nav role="navigation" class="hidden-md-down">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  ?>
				</nav>
			</div>
				<!-- <h4 class="site-description hidden-md-down">
				<?php bloginfo( 'description' ); ?>
			</h4>-->
		</div>
	</div>
</div>
<nav id="exCollapsingNavbar" role="navigation" class="collapse hidden-lg-up mobile-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>
