<?php
function wordpress_pagination()
{
    global $wp_query;
    $big = 999999999;
    $next = "<img src='" . get_image('btnNext.png') . "' alt='->'>";
    $prev = "<img src='" . get_image('btnPrev.png') . "' alt='<-'>";
    $pagination = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'prev_text' => __($prev),
        'next_text' => __($next),
    ));
    $pagination = str_replace("Próximo »", "»", $pagination);
    echo $pagination;
}
