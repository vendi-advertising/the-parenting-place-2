<?php

    $wp_customize->add_section('footer_text',array(
        'priority' => 60,
        'title' => __('Footer Section','the_parenting_place_2018'),
        'description' => __('This will appear above the social links in the footer','the_parenting_place_2018'),
        'panel' => 'theme_option'
    ));

    $wp_customize->add_setting(
        'footer_textbox1',
        array(
            'sanitize_callback' => 'the_parenting_place_2018_sanitize_text',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'footer_textbox1',
        array(
          'label' => __('Footer Heading','the_parenting_place_2018'),
          'section' => 'footer_text',
          'settings' => 'footer_textbox1',
          'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'footer_textbox2',
        array(
            'sanitize_callback' => 'the_parenting_place_2018_sanitize_text',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'footer_textbox2',
        array(
          'label' => __('Footer Second Heading','the_parenting_place_2018'),
          'section' => 'footer_text',
          'settings' => 'footer_textbox2',
          'type' => 'text',
        )
    );


    $wp_customize->add_setting( 
        'textarea_setting' ,
        array(
            'sanitize_callback' => 'the_parenting_place_2018_sanitize_text',
            'default' => '', 
    )); 
   
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'textarea_setting', array( 
        'label' => __( 'Footer Text Content', 'the_parenting_place_2018' ),
        'section' => 'footer_text',
        'settings' => 'textarea_setting', 
        'type'     => 'textarea', 
    )));    


    $wp_customize->add_section('content' , array(
        'title' => __('Content','the_parenting_place_2018'),
    ));


    $wp_customize->add_setting(
        'footer_button',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'default' => '',
          )
    );

    $wp_customize->add_control(
        'footer_button',
        array(
            'label' => __('Footer Button Link','the_parenting_place_2018'),
            'section' => 'footer_text',
            'settings' => 'footer_button',
            'type' => 'text',
        )
    );