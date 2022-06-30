<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Custom Post Type
function custom_post_type_display() {
    register_post_type('display', array(
        'label' => 'Display',
        'description' => 'Display',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'display', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes','post-formats'),

        'labels' => array (
            'name' => 'Display',
            'singular_name' => 'Display',
            'menu_name' => 'Display',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Display',
            'edit' => 'Editar',
            'edit_item' => 'Editar Display',
            'new_item' => 'Novo Display',
            'view' => 'Ver Display',
            'view_item' => 'Ver Display',
            'search_items' => 'Procurar Display',
            'not_found' => 'Nenhum Display Encontrado',
            'not_found_in_trash' => 'Nenhum Display Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_display');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

?>