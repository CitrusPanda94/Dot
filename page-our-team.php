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
               Our Massage clinic offers expert massage therap, herbal medicine and complimentary
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
        <div class="col span-1-of-2 box">
            <img src="/src/assets/images/worker_1.jpg" alt="" class="team">
            <h4>Stephanie Dawson</h4>
            <p>
                Stephanie has been a therapist now for 6+ years and is passionate about massage and the positive effects
                it offers. Not only does it assist in reducing pain, improving the body’s range of motion,
                but it also provides a psychological and emotional boost benefiting the whole body.
            </p>
            <P>
                Stephanie works with a variety of clients from elite athletes, office workers, yogi’s, and mums focusing on injury rehabilitation
                and reducing the effects of chronic conditions improving postural awareness and overall well being of her clients.
            </p>
        </div>
        <div class="col span-1-of-2 box">
            <img src="/library/src/assets/images/worker_2.jpg" alt="">
            <img src="" alt="">
            <h4>Darren Sanders</h4>
            <p>
                Darren is a massage therapist as well as a personal trainer, which means he has a deep
                understanding of body function; why you might be getting pain in specific areas, how
                to treat the cause as well as your symptoms and what you might do next to prevent pain/discomfort from returning. 
            </p>
        </div>
    </div>
</section>

<?php
get_footer(); ?>
