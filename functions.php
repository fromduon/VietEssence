<?php

// Đăng ký CSS và JavaScript
function vietessence_enqueue_styles() {
    // Đảm bảo đường dẫn đến các file CSS và JS trong thư mục theme đúng
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css'); 
    wp_enqueue_style('vietessence-style', get_template_directory_uri() . '/css/style.css'); 
    
    // Đảm bảo đường dẫn đến file JS chính xác
    wp_enqueue_script('vietessence-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true); 
}
add_action('wp_enqueue_scripts', 'vietessence_enqueue_styles');

?>
