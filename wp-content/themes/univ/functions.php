<!-- This is our behind the scene file -->
<?php 

function university_files() {
    // here we can load or css or js

    // load js file
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    // load custom font
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // load font awesome
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // laod css
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
// S4 V11 M15
add_action('wp_enqueue_scripts', 'university_files');