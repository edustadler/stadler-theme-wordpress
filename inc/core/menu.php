<?php
function theme_register_menus() {
    register_nav_menu('header_menu', 'Header Menu');
}
add_action('after_setup_theme', 'theme_register_menus');
