<?php

$contact = get_field('sexta_secao'); ?>

<section id="contact" style="background-image:url('<?php echo $contact['papel_de_parede']; ?>')">
    <div class="container">
        <div class="title">
            <span><?php echo $contact['subtitulo']; ?></span>
            <h3><?php echo $contact['titulo']; ?></h3>
        </div>
        <div class="form-block">
            <?php echo do_shortcode('[contact-form-7 id="494" title="Sem título"]'); ?>
        </div>
    </div>
</section>