<?php

function test_resources() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'test_resources')


 ?>
