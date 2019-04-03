<?php

add_action(
    'after_setup_theme',
    function() {
        load_theme_textdomain( 'the_parenting_place_2', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Register Menu Locations
         */
        $args = array(
            'main'          =>  __( 'Main Menu', 'the_parenting_place_2'),
            'footer-left'   =>  __( 'Footer Left', 'the_parenting_place_2' ),
            'footer-right'  =>  __( 'Footer Right', 'the_parenting_place_2' ),
        );
        register_nav_menus( $args );

        /*
         * Enable support for Post Types
         *
         * @link https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'the_parenting_place_2_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * @link https://developer.wordpress.org/themes/functionality/custom-headers/
         */
        add_theme_support( 'custom-header' );

        /**
         * Allows starter content to help with initial setup.
         */
        add_theme_support( 'starter-content' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action(
    'after_setup_theme',
    function() {
        // erin+adam=sweetsawyer
        // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
        // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
        $GLOBALS['content_width'] = apply_filters( 'the_parenting_place_2_content_width', 640 );
    },
    0
);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
add_action(
    'widgets_init',
    function() {
        register_sidebar( array(
            'name'          => esc_html__( ' Main Sidebar', 'the_parenting_place_2' ),
            'id'            => 'main-sidebar',
            'description'   => esc_html__( 'Add widgets for the main sidebar here.', 'the_parenting_place_2' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => esc_html__( ' Footer Sidebar', 'the_parenting_place_2' ),
            'id'            => 'footer-sidebar',
            'description'   => esc_html__( 'Add widgets for the footer sidebar here.', 'the_parenting_place_2' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
);

/**
 * Enqueue built styles from assets
 *
 */
add_action(
    'wp_enqueue_scripts',
    function(){
        //TODO: remove time
        wp_enqueue_style( 'the_parenting_place_2-style', get_template_directory_uri() . '/assets/style.css', array(), time(), 'all');
    }
);

/**
 * Enqueue built scripts from assets
 */
add_action(
    'wp_enqueue_scripts',
    function() {
        wp_enqueue_script( 'the_parenting_place_2-skip-link-focus-fix', get_template_directory_uri() . '/assets/bundle.js', array(), time(), true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
);

// tag hooks
add_action(
    'init',
    function() {
        register_taxonomy_for_object_type( 'post_tag', 'page' );
    }
);

// add tag support to pages
add_action(
    'init',
    function() {
        register_taxonomy_for_object_type('post_tag', 'page');
    }
);

// ensure all tags are included in queries
add_action(
    'pre_get_posts',
    function($wp_query) {
        if ($wp_query->get('tag')){
            $wp_query->set('post_type', 'any');
        }
    }
);

add_action( 'edit_category', 'the_parenting_place_2_category_transient_flusher' );
add_action( 'save_post',     'the_parenting_place_2_category_transient_flusher' );

// filter_hook function to react on sub_menu flag
add_filter(
    'wp_nav_menu_objects',
    function( $sorted_menu_items, $args ) {

        if ( isset( $args->sub_menu ) ) {

            $root_id = 0;

            // find the current menu item
            foreach ( $sorted_menu_items as $menu_item ) {
                if ( $menu_item->current ) {
                    // set the root id based on whether the current menu item has a parent or not
                    $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
                    break;
                }
            }

            // find the top level parent
            if ( ! isset( $args->direct_parent ) ) {
                $prev_root_id = $root_id;
                while ( $prev_root_id != 0 ) {
                    foreach ( $sorted_menu_items as $menu_item ) {
                        if ( $menu_item->ID == $prev_root_id ) {
                            $prev_root_id = $menu_item->menu_item_parent;
                            // don't set the root_id to 0 if we've reached the top of the menu
                            if ( $prev_root_id != 0 ) {
                                $root_id = $menu_item->menu_item_parent;
                            }

                            break;
                        }
                    }
                }
            }

            $menu_item_parents = array();
            foreach ( $sorted_menu_items as $key => $item ) {
                // init menu_item_parents
                if ( $item->ID == $root_id ) {
                    $menu_item_parents[] = $item->ID;
                }

                if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
                    // part of sub-tree: keep!
                    $menu_item_parents[] = $item->ID;
                } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
                    // not part of sub-tree: away with it!
                    unset( $sorted_menu_items[$key] );
                }
            }
        }

        return $sorted_menu_items;
    },
    10,
    2
);

