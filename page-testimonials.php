<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

 <section class="container-services content">
    <div class="row">
        <div class="col span-1-of-1 box">
            <h2 class="heading"><?php echo the_title() ?></h2>
        </div>
    </div>
</section>

<?php
get_footer(); ?>
