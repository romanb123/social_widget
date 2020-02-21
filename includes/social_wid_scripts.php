<?php

function sosial_wid_scripts()
{
    wp_enqueue_style('main style', plugins_url() . '/SOCIAL_WIDGET/css/main.css');
    wp_enqueue_script('main js', plugins_url() . '/SOCIAL_WIDGET/js/main.js');
}

add_action('wp_enqueue_scripts', 'sosial_wid_scripts');
