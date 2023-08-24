<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="<?php echo get_bloginfo(); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon/apple-touch-icon.png"> -->

    <?php
    // Get the current page-template
    $current_template = basename(get_page_template());

    // Load the general "bandeiratheme" CSS file
    wp_enqueue_style('bandeiratheme', get_template_directory_uri() . '/assets/css/bandeiratheme.min.css', array(), '1.0.0', 'all');

    // Load the custom CSS file for the current page-template
    wp_enqueue_style('page-template', get_template_directory_uri() . '/assets/css/' . $current_template . '.min.css', array(), '1.0.0', 'all');

    // Always include the default WordPress stylesheets
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar">
            <a href='#hero' class="logo-a"><img src="https://bandeiraservicos.com.br/wp-content/uploads/2022/01/logo-rodape.png" alt="Bandeira logo"></a>
            <div class="toggle"><div class="lines"></div></div>
            <div class="navbar-container">
                <div class="close-btn">
                    <div class="close-line"></div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'navbar-menu', // CSS class for the menu ul element
                ));
                ?>
            </div>
        </nav>
    </header>