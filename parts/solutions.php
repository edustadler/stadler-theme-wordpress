<?php

$solution = get_field('quinta_secao'); ?>

<section id="solutions" style="background: #f3f3f3;">
    <div class="container">
        <div class="title">
            <h2><?php echo $solution['titulo']; ?></h2>
            <p></p>
        </div>
        <div class="solutions-block">
            <div class="solution-box">
                <h4><?php echo $solution['titulo_da_caixa_1']; ?></h4>
                <?php echo $solution['conteudo_caixa_1']; ?>
            </div>
            <div class="solution-box">
                <h4><?php echo $solution['titulo_da_caixa_2']; ?></h4>
                <?php echo $solution['conteudo_caixa_2']; ?>
            </div>
            <div class="solution-box">
                <h4><?php echo $solution['titulo_da_caixa_3']; ?></h4>
                <?php echo $solution['conteudo_caixa_3']; ?>
            </div>
            <div class="solution-box">
                <h4><?php echo $solution['titulo_da_caixa_4']; ?></h4>
                <?php echo $solution['conteudo_caixa_4']; ?>
            </div>
        </div>
    </div>
</section>