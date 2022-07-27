<?php
// Always keep this css pls
function wp_bakery_text_area_font_size()
{
?>
    <style>
        .wpb-textarea_raw_html {
            font-size: 15px !important;
            color: #000 !important;
        }
    </style>
<?php
}
add_action('admin_enqueue_scripts', 'wp_bakery_text_area_font_size');

// start home shortcode 
require_once get_theme_file_path() . '/inc/wp-bakery-shortcode/home/sec-1.php';
