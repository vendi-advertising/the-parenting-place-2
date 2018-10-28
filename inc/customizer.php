<?php
function the_parenting_place_2018_customizer_register( $wp_customize ) {


    $wp_customize->add_panel( 'theme_option', array(
        'priority' => 200,
        'title' => __( 'The Parenting Place Options', 'the_parenting_place_2018' ),
        'description' => __( 'Theme Options', 'the_parenting_place_2018' ),
    ));

    // Social Section
    require get_template_directory() . '/inc/customizer/social.php';

    // Footer
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
        'welcome_button',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'default' => '',
          )
      );

      $wp_customize->add_control(
        'welcome_button',
         array(
          'label' => __('Footer Button Link','the_parenting_place_2018'),
          'section' => 'footer_text',
          'settings' => 'welcome_button',
          'type' => 'text',
         )
      );
     
}

add_action( 'customize_register', 'the_parenting_place_2018_customizer_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function the_parenting_place_2018_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function the_parenting_place_2018_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );

function the_parenting_place_2018_customizer_js() {
    wp_enqueue_script('ultra-customizer-js', get_template_directory_uri() . '/js/ultra-customizer.js', array('jquery'), '1.3.0', true);

    wp_localize_script( 'ultra-customizer-js', 'the_parenting_place_2018_customizer_js_obj', array(
        'pro' => __('Upgrade To the_parenting_place_2018 Pro','the_parenting_place_2018')
    ) );
    wp_enqueue_style( 'ultra-customizer-css', get_template_directory_uri() . '/css/ultra-customizer.css');
}
add_action( 'customize_controls_enqueue_scripts', 'the_parenting_place_2018_customizer_js' );

function the_parenting_place_2018_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function the_parenting_place_2018_sanitize_textarea( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function the_parenting_place_2018_sanitize_category($input){
  $output=intval($input);
  return $output;

}
     
add_action( 'customize_register', 'the_parenting_place_2018_customizer_register' );