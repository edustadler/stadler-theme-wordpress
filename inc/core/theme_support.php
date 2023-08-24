<?php
function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_setup');
