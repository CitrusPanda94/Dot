<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <section class="container-services content">
	<div class="row">
		<div class="col span-1-of-2 box">
			<!-- <h1>Services</h1> -->
			<main class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php
					the_post_navigation();
				?>
				<?php comments_template(); ?>
				<?php endwhile; ?>
			</main>
		</div>
		<div class="col span-1-of-2 box main-grid">
			
		</div>
	</div>
</section>
	
<section class="container-services content">
	<div class="row">
		<div class="col span-1-of-2 box">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
		</div>
		<div class="col span-1-of-2 box main-grid">
		</div>
	</div>
</section>


<?php
get_footer(); ?>
