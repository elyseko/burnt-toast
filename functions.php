<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action('et_header_top', 'add_tag_line');
function add_tag_line() {
     echo '<div class="tag-line">Healthy Recipes. Mindful cooking. Heartfelt stories.</div>';
}
?>
