<?php

add_action('wp_head', 'show_template');
function show_template() {
    global $template;
    return basename($template, '.php');
}