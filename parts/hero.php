<?php $hero = get_field('primeira_secao'); ?>

<section id="hero" style="background-image:url('<?php echo $hero['papel_de_parede']; ?>')">
    <div class="container">
        <div class="main-content">
            <h1><?php echo $hero['titulo']; ?></h1>
            <?php echo $hero['conteudo']; ?>
            <div class="btn-block">
                <a href="#contact" class="btn btn-blue">Entre em contato</a>
            </div>
        </div>
    </div>
</section>