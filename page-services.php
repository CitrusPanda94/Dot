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
            <div class="col span-1-of-2 box">
                <!-- <main class="main-content"> -->
                    <h2 class="heading"><?php echo the_title() ?></h2>

                    <div class="entry-content">
                        <?php echo the_content(); ?>
                    </div>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>

            </div>
            
            <div class="col span-1-of-2 box main-grid">
                
            </div>
        </div>
    </section>

     <section class="container-team content">
        <div class="row">
            <!-- <div class="col span-1-of-2 box">
                <img src="wp-content/themes/FoundationPress/src/assets/images/back-massage.jpg" alt="">
            </div>
            <div class="col span-1-of-2 box">
                <img src="wp-content/themes/FoundationPress/src/assets/images/back-massage.jpg" alt="">
            </div> -->
        </div>
    </section>

<?php
get_footer(); ?>
