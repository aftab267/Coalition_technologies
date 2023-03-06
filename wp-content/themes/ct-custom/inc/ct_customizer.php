<?php


function ct_customizer($wp_customize){
    // Top Menu section
    $wp_customize->add_section('top_menu',array(
        'title'=>__('Theme Settings','ct-custom'),
        'priority' => 10,
    ));
    //Top Menu Setting
    $wp_customize->add_setting('top_menu_phone',array(
        'default'=> __('385.154.11.28.35','ct-custom')
    ));
    //Top Menu control
    $wp_customize->add_control('top_menu_phone_ctrl',array(
        'label'=>__('Write Phone','ct-custom'),
        'type'=> 'text',
        'settings'=> 'top_menu_phone',
        'section'=> 'top_menu'
    ));
    //Footer Phone Setting
    $wp_customize->add_setting('footer_menu_phone',array(
        'default'=> __('385.154.11.28.35','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_menu_phone_ctrl',array(
        'label'=>__('Write Footer Phone','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_menu_phone',
        'section'=> 'top_menu'
    ));
    //Footer Address Setting
    $wp_customize->add_setting('footer_menu_address',array(
        'default'=> __('535 La Plata Street <br> 4200 Argentina','ct-custom')
    ));
    //Footer Address control
    $wp_customize->add_control('footer_menu_address_ctrl',array(
        'label'=>__('Write Footer Address','ct-custom'),
        'type'=> 'textarea',
        'settings'=> 'footer_menu_address',
        'section'=> 'top_menu'
    ));
    //Footer Fax Setting
    $wp_customize->add_setting('footer_menu_fax',array(
        'default'=> __('385.154.11.28.35','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_menu_fax_ctrl',array(
        'label'=>__('Write Footer Fax','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_menu_fax',
        'section'=> 'top_menu'
    ));
    //Footer Facebook link Setting
    $wp_customize->add_setting('footer_facebook_link',array(
        'default'=> __('https://www.facebook.com/','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_facebook_ctrl',array(
        'label'=>__('Write Facebook link','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_facebook_link',
        'section'=> 'top_menu'
    ));
    //Footer Twitter link Setting
    $wp_customize->add_setting('footer_twitter_link',array(
        'default'=> __('https://www.twitter.com/','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_twitter_ctrl',array(
        'label'=>__('Write Twitter link','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_twitter_link',
        'section'=> 'top_menu'
    ));
    //Footer Linkedin link Setting
    $wp_customize->add_setting('footer_linkedin_link',array(
        'default'=> __('https://www.linkedin.com/','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_linkedin_ctrl',array(
        'label'=>__('Write Linkedin link','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_linkedin_link',
        'section'=> 'top_menu'
    ));
    //Footer Pinterest link Setting
    $wp_customize->add_setting('footer_pinterest_link',array(
        'default'=> __('https://www.pinterest.com/','ct-custom')
    ));
    //Footer Phone control
    $wp_customize->add_control('footer_pinterest_ctrl',array(
        'label'=>__('Write Pinterest link','ct-custom'),
        'type'=> 'text',
        'settings'=> 'footer_pinterest_link',
        'section'=> 'top_menu'
    ));

} 
add_action('customize_register','ct_customizer');