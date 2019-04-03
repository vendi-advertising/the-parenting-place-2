<?php

//Sync our ACF settings to and from disk
add_filter(
            'acf/settings/save_json',
            function( $paths ) {
                return TPP_THEME_PATH . '/.acf-json';
            }
        );
add_filter(
            'acf/settings/load_json',
            function( $paths ) {
                return [ TPP_THEME_PATH . '/.acf-json' ];
            }
        );
