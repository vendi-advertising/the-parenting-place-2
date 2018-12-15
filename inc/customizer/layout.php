<?php

    $wp_customize->add_section('layout_options',array(
        'priority' => 70,
        'title' => __('Layout Options','the_parenting_place'),
        'description' => __('Determines the position of the sidebar for non-pages','the_parenting_place'),
        'panel' => 'theme_option'
    ));

    $wp_customize->add_setting(
        'side_bar_position',
            array(
              'default' => 'none',
          )
    );

    $wp_customize->add_control(
        'side_bar_position',
        array(
            'label' => __('Side-bar layout','the_parenting_place'),
            'section' => 'layout_options',
            'settings' => 'side_bar_position',
            'type' => 'radio',
            'choices'        => array(
                'right'   => __( 'Right' ),
                'left'  => __( 'Left' ),
                'none' => __('None')
            )
        )
    );
    
    $wp_customize->add_setting(
        'icon_size',
            array(
              'default' => '200',
          )
    );

    $wp_customize->add_control(
        'icon_size',
        array(
            'label' => __('Icon Size','the_parenting_place'),
            'section' => 'layout_options',
            'settings' => 'icon_size',
            'type' => 'number',
        )
    );