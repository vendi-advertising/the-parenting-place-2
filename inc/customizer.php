<?php
function the_parenting_place_customizer_register( $wp_customize ) {

    // remove unwanted sections
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('colors');

    $wp_customize->add_panel( 'theme_option', array(
        'priority' => 200,
        'title' => __( 'The Parenting Place Options', 'the_parenting_place' ),
        'description' => __( 'Theme Options', 'the_parenting_place' ),
    ));

    // Layout
    require get_template_directory() . '/inc/customizer/layout.php';

    // Social Section
    require get_template_directory() . '/inc/customizer/social.php';

    // Footer
    require get_template_directory() . '/inc/customizer/footer.php';
    
     
}

add_action( 'customize_register', 'the_parenting_place_customizer_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function the_parenting_place_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function the_parenting_place_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );

function the_parenting_place_customizer_js() {
    wp_enqueue_script('ultra-customizer-js', get_template_directory_uri() . '/js/ultra-customizer.js', array('jquery'), '1.3.0', true);

    wp_localize_script( 'ultra-customizer-js', 'the_parenting_place_customizer_js_obj', array(
        'pro' => __('Upgrade To the_parenting_place Pro','the_parenting_place')
    ) );
    wp_enqueue_style( 'ultra-customizer-css', get_template_directory_uri() . '/css/ultra-customizer.css');
}
add_action( 'customize_controls_enqueue_scripts', 'the_parenting_place_customizer_js' );

function the_parenting_place_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function the_parenting_place_sanitize_textarea( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function the_parenting_place_sanitize_category($input){
  $output=intval($input);
  return $output;

}
     
add_action( 'customize_register', 'the_parenting_place_customizer_register' );