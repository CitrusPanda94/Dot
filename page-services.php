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
        <div class="col span-1-of-2 box">
            <p>
                We are proud to offer a range of complementary therapies including
                sports massage, pregnancy massage, myofascial release, remedial massage,
                and therapeutic massage for chronic pain and muscular-skeletal injuries to
                support your complete recovery.
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
        <div class="col span-1-of-2 box">
            <?php
                $args = array(
                    'post_type' => 'massage_service',
                    'posts_per_page' => 5
                );
                $loop = new WP_Query($args);
                
                if ($loop->have_posts()) : $count = 0;
                    while ($loop->have_posts()) :
                    $loop->the_post(); ?>
                    <h2><a href="<?php echo site_url(); ?>/massage_service/<?php echo $post->post_name; ?>"><?php echo the_title(); ?></a>
                    </h2>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_name; ?>" />
                <?php endwhile;
                endif;
            ?>
        </div>
        <div class="col span-1-of-2 box">
       
        </div>
    </div>
</section>

<div class="grid-x grid-margin-x content">
    <div class="small-6 cell">
        <h2 class="heading"><?php echo the_title() ?></h2>
    </div>

    <div class="small-6 cell">
        <h5>Menu</h5>
    </div>
</div>

<?php
get_footer(); ?>
