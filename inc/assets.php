<?php

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'digitfab-child-theme',
        get_stylesheet_directory_uri() . '/assets/css/styles.css',
        ['digitfab-theme'],
        wp_get_theme()->get( 'Version' ),
    );

} );
