<?php
function wpb_customize_register($wp_customize){
    //showcase Section
    $wp_customize->add_section('showcase', array(
    'title' =>__('showcase', 'wpbootstrap'),
    'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
    'priority' => 130
    ));

    //Hero background image
    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_customize_image_control($wp_customize, 'showcase_image', array(
        'label' => __('showcase_image', 'wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));

    //Heading
    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom bootstrap wordpress theme', 'wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));

    //text
    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dui in lorem congue malesuada. Morbi nec felis nec leo gravida pretium eget at mauris. Nulla hendrerit quis ipsum non cursus. Nam semper lorem ut convallis tincidunt. Quisque pellentesque lacus ligula', 'wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));

     //button url
     $wp_customize->add_setting('btn_url', array(
        'default' => _x('http://test.com', 'wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label' => __('Button URL', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ));

    //button text
     $wp_customize->add_setting('btn_text', array(
        'default' => _x('Read More', 'wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
        'label' => __('Button text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));
}



add_action('customize_register', 'wpb_customize_register');