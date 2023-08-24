<?php

/**
 * Template Name: Home
 */

get_header(); ?>


<?php get_template_part('parts/hero'); ?>

<?php get_template_part('parts/about'); ?>

<?php get_template_part('parts/how-it-works'); ?>

<?php get_template_part('parts/advantages'); ?> <!-- CUSTOM POST TYPE LOOP SECTION -->

<?php get_template_part('parts/solutions'); ?>

<?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>