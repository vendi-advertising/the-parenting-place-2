<?php

    $wp_customize->add_section('footer_text',array(
        'priority' => 60,
        'title' => __('Footer Section','the_parenting_place'),
        'description' => __('This will appear above the social links in the footer','the_parenting_place'),
        'panel' => 'theme_option'
    ));

    $wp_customize->add_setting(
        'footer_title',
        array(
            'sanitize_callback' => 'the_parenting_place_sanitize_text',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'footer_title',
        array(
          'label' => __('Footer Title','the_parenting_place'),
          'section' => 'footer_text',
          'settings' => 'footer_title',
          'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'footer_textbox',
        array(
            'sanitize_callback' => 'the_parenting_place_sanitize_text',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'footer_textbox',
        array(
          'label' => __('Footer Textbox','the_parenting_place'),
          'section' => 'footer_text',
          'settings' => 'footer_textbox',
          'type' => 'text',
        )
    );


    $wp_customize->add_setting( 
        'footer_textarea' ,
        array(
            'sanitize_callback' => 'the_parenting_place_sanitize_text',
            'default' => '', 
    )); 
   
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'textarea_setting', array( 
        'label' => __( 'Footer Text Content', 'the_parenting_place' ),
        'section' => 'footer_text',
        'settings' => 'footer_textarea', 
        'type'     => 'textarea', 
    )));    


    $wp_customize->add_section('content' , array(
        'title' => __('Content','the_parenting_place'),
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
            'label' => __('Footer Button Link','the_parenting_place'),
            'section' => 'footer_text',
            'settings' => 'footer_button',
            'type' => 'text',
        )
    );

    
    

