<?php 
function custom_post_type_nossas_vantagens() {
    $labels = array(
        'name'               => 'Vantagens',
        'singular_name'      => 'Vantagem',
        'menu_name'          => 'Nossas Vantagens',
        'add_new'            => 'Adicionar Nova Vantagem',
        'add_new_item'       => 'Adicionar Nova Vantagem',
        'edit_item'          => 'Editar Vantagem',
        'new_item'           => 'Nova Vantagem',
        'view_item'          => 'Ver Vantagem',
        'search_items'       => 'Procurar Vantagens',
        'not_found'          => 'Nenhuma vantagem encontrada',
        'not_found_in_trash' => 'Nenhuma vantagem encontrada na lixeira',
        'parent_item_colon'  => '',
        'featured_image'     => 'Imagem Destacada',
        'set_featured_image' => 'Definir imagem destacada',
        'remove_featured_image' => 'Remover imagem destacada',
        'use_featured_image' => 'Usar como imagem destacada',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'vantagens' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-star-filled',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'nossas_vantagens', $args );
}
add_action( 'init', 'custom_post_type_nossas_vantagens' );
