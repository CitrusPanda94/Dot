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

<section class="container-services content">
    <div class="row">
        <div class="col span-1-of-2 box blurb">
            <p>
               Our Massage clinic offers expert massage therapy, herbal medicine and complimentary
               body therapies by qualified therapist in a safe, professional environment.
            </p>
        </div>
        <div class="col span-1-of-2 box">
            <p>
                Our therapists are qualified in a range of different styles of massage therapy.
                We can tailor your massage according to your body!
            </p>
        </div>
    </div>
</section>

<section class="container-services content">
    <div class="row">
        <div class="grid-x">
            <?php
                $args = array(
                    'post_type' => 'massage_team',
                    'posts_per_page' => 5
                );
                $loop = new WP_Query($args);
                
                if ($loop->have_posts()) : $count = 0;
                    while ($loop->have_posts()) :
                    $loop->the_post(); ?>
                    <div class="cell large-6">
                        <img class="service-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_name; ?>" />
                        <?php get_template_part( 'template-parts/content', '' ); ?>
                    </div>
                <?php endwhile;
                endif; ?>
        </div>
    </div>
</section>

<?php
get_footer(); ?>