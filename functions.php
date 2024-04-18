<?php

function msp_files()
{
    wp_enqueue_style(
        'msp_main_styles',
        get_theme_file_uri('/build/style-index.css')
    );
    wp_enqueue_style(
        'msp_extra_styles',
        get_theme_file_uri('/build/index.css')
    );
    wp_enqueue_style('msp_extra_styles_2', get_theme_file_uri('/index.css'));
}

add_action('wp_enqueue_scripts', 'msp_files');
