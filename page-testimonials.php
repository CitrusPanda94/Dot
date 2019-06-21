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
            <h3 class="heading"><?php echo the_title() ?></h3>
        </div>
    </div>
</section>

<section class="container-services content">
    <div class="row">
        <div class="col span-1-of-2 box blurb">
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
            <p>
                “The massage therapy treatment I have received, initially for stress relief and back/neck pain, has been totally beneficial
                and effective. My initial concerns were completely unfounded. Stephanie warm and friendly approach
                during the treatment and made me feel comfortable and at ease.”
            </p>
            <cite>PETER MCKAY</cite>
        </div>
        <div class="col span-1-of-2 box">
            <p>
                “Before I received treatment, I had been suffering symptoms from a long-term repetitive strain injury in my shoulders,
                back and neck. No therapist had been able to make a significant difference in reducing my
                pain. It became clear within the first session that I had found someone who could provide real relief, and within a
                few sessions my pain had decreased considerably!
            </p>
            <cite>MATT SMITH</cite>
        </div>
    </div>

    <div class="row">
        <div class="col span-1-of-2 box">
            <p>
                “As a result of my office work and outdoor activities I have had various injuries to my lower back, 
                and since receiving treatment I've had a speedy recovery! Darren gets right to
                work on the problem and ensures you feel the benefit by the end of the session. You can
                rest assured that your body is in very good hands.”

            </p>
            <cite>ASHLEIGH MCLAUGHLIN</cite>
        </div>
        <div class="col span-1-of-2 box">
            <p>  
                “Having spent literally hours on physiotherapist tables over the past two years for various sport related
                injuries, I wish I had known about massage therapy a long time ago. In terms of reducing pain and increasing
                mobility have been immediate and I would recommend a visit to anyone serious about a quick recovery.”
            </p>
            <cite>KENLEY TANNER</cite>
        </div>
    </div>
</section>



<?php
get_footer(); ?>


