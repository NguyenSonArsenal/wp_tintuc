<?php
function assets($path = '')
{
    return bloginfo('template_url') . '/assets/' . ltrim($path);
}

function setPostView($postID)
{
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getPostViews($postID)
{
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function register_my_menus()
{
    register_nav_menu('menu1', __('Header Menu'));
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'register_my_menus');

function wdm_remove_parent_category_from_url( $args ) {
    $args['rewrite']['hierarchical'] = false;
    return $args;
}

add_filter( 'woocommerce_taxonomy_args_product_cat', 'wdm_remove_parent_category_from_url' );
