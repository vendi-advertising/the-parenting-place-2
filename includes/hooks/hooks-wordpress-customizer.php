<?php

add_action(
    'customize_register',
    function( $wp_customize ) {

        // remove unwanted sections
        $wp_customize->remove_section('header_image');
        $wp_customize->remove_section('colors');

        $wp_customize->add_panel( 'theme_option', array(
            'priority' => 200,
            'title' => __( 'The Parenting Place Options', 'the_parenting_place_2' ),
            'description' => __( 'Theme Options', 'the_parenting_place_2' ),
        ));

        // Layout
        require get_template_directory() . '/inc/customizer/layout.php';

        // Social Section
        require get_template_directory() . '/inc/customizer/social.php';

        // Footer
        require get_template_directory() . '/inc/customizer/footer.php';


    }
);

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
add_action(
    'customize_preview_init',
    function() {
        wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
    }
);

add_action(
    'customize_controls_enqueue_scripts',
    function() {
        wp_enqueue_script('ultra-customizer-js', get_template_directory_uri() . '/js/ultra-customizer.js', array('jquery'), '1.3.0', true);

        wp_localize_script( 'ultra-customizer-js', 'the_parenting_place_2_customizer_js_obj', array(
            'pro' => __('Upgrade To the_parenting_place_2 Pro','the_parenting_place_2')
        ) );
        wp_enqueue_style( 'ultra-customizer-css', get_template_directory_uri() . '/css/ultra-customizer.css');
    }
);
