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
		<div class="col span-1-of-2">
			<main class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php comments_template(); ?>
				<?php endwhile; ?>
				<a href="http://localhost:3000/massage/service/" class="btn">Back</a>
			</main>
		</div>
		<div class="col span-1-of-2 display-image">
			<?php echo the_post_thumbnail() ?>
		</div>
	</div>
</section>
	
<section class="container-services content">
	<div class="row">
		<div class="col span-1-of-2">
		</div>
		<div class="col span-1-of-2">
			<a href="http://localhost:3000/massage/service/" class="btn btn-right">Make Appointment</a>
		</div>
	</div>
</section>


<?php
get_footer(); ?>
