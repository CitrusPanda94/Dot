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
        <div class="col span-1-of-2 box">
            <p>
                66 Riccarton Road, Riccarton <br>
                Christchurch, 8011, New Zealand.
            </p>
            <p>
                We have a cancellation policy that dictates that if you cancel your appointment within
                24 hours, you must pay full price.
            </p>
            <p>
               Be as specific in your message to us so we can cater to your needs and make you
               feel as comfortable as possible.
            </p>
            <p>
                <strong>Mon - Fri 9am - 7pm<br>Sat - Sun 12pm - 7pm</strong>
            </p>
        </div>
        <div class="col span-1-of-2 box">
        <!-- <section class="section-form">
        <div class="row"> -->
            <form method="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-3-of-3">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col span-3-of-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="+64 00 000 0000" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-3-of-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-3-of-3">
                        <label for="service">Service</label>
                        <input type="text" name="service" id="service" placeholder="Swedish Massage">
                    </div>
                </div>

                <div class="row">
                    <div class="col span-3-of-3">
                        <label>Message</label>
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col span-1-of-1">
                        <input type="submit" class="btn" value="Submit">
                    </div>
                </div>
            </form>
        <!-- </div>
    </section> -->
        </div>
    </div>
</section>

<?php
get_footer(); ?>
