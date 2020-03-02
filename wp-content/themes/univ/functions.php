<!-- This is our behind the scene file -->
<?php 

function university_files() {
    // here we can load or css or js
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
// S4 V11 M15
add_action('wp_enqueue_scripts', 'university_files');