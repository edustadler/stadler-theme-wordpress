<?php

$how = get_field('terceira_secao'); ?>

<section id="how-it-works">
    <div class="container">
        <div class="title">
            <h2><?php echo $how['titulo']; ?></h2>
            <p><?php echo $how['subtitulo']; ?></p>
        </div>
        <div class="how-container">
            <div class="how-box">
                <div class="how-header">
                    <div class="how-icon">
                        <img src="<?php echo $how['icone_1']; ?>" alt="">
                    </div>
                    <p><?php echo $how['titulo_do_icone_1']; ?></p>
                </div>
                <div class="how-content">
                    <p><?php echo $how['conteudo_caixa_1']; ?></p>
                </div>
            </div>
            <div class="how-box">
                <div class="how-header">
                    <div class="how-icon">
                        <img src="<?php echo $how['icone_2']; ?>" alt="">
                    </div>
                    <p><?php echo $how['titulo_icone_2']; ?></p>
                </div>
                <div class="how-content">
                    <p><?php echo $how['conteudo_caixa_2']; ?></p>
                </div>
            </div>
            <div class="how-box">
                <div class="how-header">
                    <div class="how-icon">
                        <img src="<?php echo $how['icone_3']; ?>" alt="">
                    </div>
                    <p><?php echo $how['titulo_icone_3']; ?></p>
                </div>
                <div class="how-content">
                    <p><?php echo $how['conteudo_caixa_3']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>