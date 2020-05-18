<?php

/* 
* Register ACF Blocks
*inc/acf-blocks.php
*/

function register_acf_block_types() {
    //Register some block here
    acf_register_block_type ([
        'name' =>   'testimonial',
        'title' =>   __('Testimonial', 'kks-theme'),
        'description' => __('A custom testimonial block', 'kks-theme'),
        'render-template' => 'loop/templates/blocks/testimonial.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => ['testimonial', 'quote']
    ]); 
}

if(function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}