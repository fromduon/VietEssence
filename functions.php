<?php

function vietessence_enqueue_styles() {
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('vietessence-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.min.css');
    wp_enqueue_style('tempusdominus-css', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');
}
add_action('wp_enqueue_scripts', 'vietessence_enqueue_styles');

function vietessence_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script('easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('moment-js', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', array('jquery'), null, true);
    wp_enqueue_script('moment-timezone-js', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', array('jquery'), null, true);
    wp_enqueue_script('tempusdominus-js', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array('jquery', 'moment-js'), null, true);

    wp_enqueue_script('vietessence-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'wow-js'), null, true);
}
add_action('wp_enqueue_scripts', 'vietessence_enqueue_scripts');

function set_language_cookie() {
    if(isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        setcookie('site_lang', $lang, time() + (86400 * 30), "/");
        $_SESSION['site_lang'] = $lang; 
        header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
        exit();
    }
}
add_action('init', 'set_language_cookie');


?>
