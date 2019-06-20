<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>	
		<div class="row">
			<div class="col span-1-of-1">
			<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
					<!-- <div class="top-bar-right"> -->
						<div class="top-bar-left content">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		</div>
</header>


<!-- <div class="header">
	  
	<div id="nav-container">
		<div id="nav-overlay"></div>
		<nav id="nav-fullscreen">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<h1 class="logo" id="nav-toggle"></h1>
	</div>
</div> -->

<div class="header">
	  
	  <div id="nav-container">
		  <div id="nav-overlay"></div>
		  <nav id="nav-fullscreen">
			  <ul>
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Blog</a></li>
				  <li><a href="#">About</a></li>
				  <li><a href="#">Contact</a></li>
			  </ul>
		  </nav>
		  <h1 class="logo"></h1>
	  </div>
  </div>

</body>

<!-- </html> -->





<!-- 
	<div class="header">
    <h1 class="logo"></h1>
    <nav role='navigation' class='primary-nav' id="nav-fullscreen">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
	</nav>
	
	<div id="nav-container">
			<div id="nav-overlay"></div>
			<nav id="nav-fullscreen">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<a id="nav-toggle">
				<span></span>
				<span></span>
				<span></span>
			</a>
	</div>
    <footer>
      <a href="#"><img src="http://images.clipartpanda.com/envelope-png-envelope_outline-128.png" width="30" height="" alt="contact" /></a>
    </footer>
  </div> -->




