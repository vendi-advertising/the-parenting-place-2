<?php

    $wp_customize->add_section(
        'social_section',
        array(
            'priority' => 50,
            'title' => __('Social Info','the_parenting_place'),
            'description' => 'Customize your Social Info',
            'panel' => 'theme_option'
        )
    );


    // Social Links
    $wp_customize->add_setting(
        'facebook_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'facebook_textbox',
        array(
            'label' => __('Facebook','the_parenting_place'),
            'section' => 'social_section',
            'settings' => 'facebook_textbox',
            'type' => 'text',
            'default' =>''
        )
    );

    $wp_customize->add_setting(
        'twitter_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'twitter_textbox',
        array(
            'label' => __('Twitter','the_parenting_place'),
            'section' => 'social_section',
            'settings' => 'twitter_textbox',
            'type' => 'text',
        )
    );

    //   $wp_customize->add_setting(
    //     'googleplus_textbox',
    //       array(
    //         'sanitize_callback' => 'esc_url_raw',
    //         'default' => '',
    //       )
    //   );

    //   $wp_customize->add_control(
    //     'googleplus_textbox',
    //       array(
    //       'label' => __('Googleplus','the_parenting_place'),
    //       'section' => 'social_section',
    //       'settings' => 'googleplus_textbox',
    //       'type' => 'text',
    //      )
    //   );

    $wp_customize->add_setting(
        'linkedin_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
          )
    );

    $wp_customize->add_control(
        'linkedin_textbox',
        array(
            'label' => __('Linkedin','the_parenting_place'),
            'section' => 'social_section',
            'settings' => 'linkedin_textbox',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'pinterest_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        )
    );
      
    $wp_customize->add_control(
        'pinterest_textbox',
        array(
            'label' => __('Pinterest','the_parenting_place'),
            'section' => 'social_section',
            'settings' => 'pinterest_textbox',
            'type' => 'text',
        )
    );