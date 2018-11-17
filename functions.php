<?php
if(!is_admin()){
    function load_smallest_wptheme() {
        wp_deregister_style('bootstrap');
        wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap');
        wp_deregister_script('bootstrap');
        wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), false, true);
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('jquery', '', array(), false, true);
        wp_enqueue_script('jquery-slim', 'https://code.jquery.com/jquery-3.3.1.slim.js', array(), false, true);
    }
    add_action('init', 'load_smallest_wptheme');
}
?>