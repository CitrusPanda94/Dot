<?php 

$wp_customize->add_section('service_background', array(
    'title' => __('Service Image'),
    'priority' => 1
));

$wp_customize->add_setting('service_background_image', array(
    'capability' => 'edit_theme_options',
    // 'default' => __('We\'d love to hear from you.')
));

$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'service_background', array(
    'label'      => __( 'Upload a logo', 'theme_name' ),
    'section'    => 'service_background',
    'settings'   => 'service_background_image',
    'context'    => 'your_setting_context' 
    ))
);

?>