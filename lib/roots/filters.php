<?php
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['lr_post_thumbs'] = __('Thumbs');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
    if($column_name === 'lr_post_thumbs'){
        echo '<a href="'.get_permalink().'" >'.the_post_thumbnail(array(50,50)).'</a>';
    }
}