<?php

function bw_customize_register($wp_customize){
    // require_once get_template_directory() . '/inc/customization/contact.php';
    // require_once get_template_directory() . '/library/customization/image-team.php';
    require_once get_template_directory() . '/library/customization/image-team.php';
    require_once get_template_directory() . '/library/customization/image-service.php';
    
}


add_action('customize_register', 'bw_customize_register');
?> 