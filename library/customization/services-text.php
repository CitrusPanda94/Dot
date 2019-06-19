<?php
$wp_customize->add_section('massage_page', array(
   'title' => __('Homepage Content'),
   'priority' => 0
));

$wp_customize->add_setting('massage_service_message_blurb', array(
   'capability' => 'edit_theme_options',
   'default' => __('Write content here!!')
));

$wp_customize->add_control('massage_service_message_blurb_control', array(
   'type' => 'textarea',
   'section' => 'massage_page',
   'settings' => 'massage_service_message_blurb',
   'label' => __('Services')
));

$wp_customize->selective_refresh->add_partial( 'massage', array(
   'selector' => '.contact-address',
   'render_callback' => function() {
       __return_false;
   }
));