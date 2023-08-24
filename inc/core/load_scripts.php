<?php 
function lb_load_scripts()
{
    // Define your theme's version for cache-busting
    $version = '1.0.0';

    // Enqueue custom CSS files from the "assets/css" directory
    $css_dir = get_template_directory() . '/assets/css/';
    $files_css = array_diff(scandir($css_dir), ['.', '..']);

    foreach ($files_css as $css) {
        if (strpos($css, '.css') !== false) {
            $file_name = pathinfo($css, PATHINFO_FILENAME);
            $css_file = '/assets/css/' . $css;
            wp_enqueue_style('bandeiratheme-' . $file_name, get_template_directory_uri() . $css_file, array(), $version, 'all');
        }
    }

    // Enqueue custom JavaScript files from the "assets/js" directory
    $js_dir = get_template_directory() . '/assets/js/';
    $files_js = array_diff(scandir($js_dir), ['.', '..']);

    foreach ($files_js as $js) {
        if (strpos($js, '.js') !== false) {
            $file_name = pathinfo($js, PATHINFO_FILENAME);
            $js_file = '/assets/js/' . $js;

            wp_enqueue_script('bandeiratheme-' . $file_name, get_template_directory_uri() . $js_file, array('jquery'), $version, true);
        }
    }
}

add_action('wp_enqueue_scripts', 'lb_load_scripts');
