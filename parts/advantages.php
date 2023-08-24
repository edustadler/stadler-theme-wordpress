<?php

$advantage = get_field('quarta_secao'); ?>

<section id="advantages">
    <div class="container">
        <div class="title">
            <h2><?php echo $advantage['titulo']; ?></h2>
            <p><?php echo $advantage['subtitulo']; ?></p>
        </div>
        <div class="advantage-container">
            <?php
            $args = array(
                'post_type' => 'nossas_vantagens',
                'posts_per_page' => -1, // Set to -1 to show all "Vantagens"
            );

            $query = new WP_Query($args);

            while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="advantages-block">
                    <div class="image-block">
                        <?php
                        if (has_post_thumbnail()) {
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $featured_image_url = $image_url[0];
                        } else {
                            $featured_image_url = ''; // Default URL if no featured image
                        }
                        ?>
                        <img src="<?php echo esc_url($featured_image_url); ?>" alt="clean">
                    </div>
                    <div class="advantages-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>