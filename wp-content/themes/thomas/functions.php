<?
add_filter( 'use_default_gallery_style', '__return_false' );

add_filter('next_post_link_attributes', 'posts_link_attributes_1');
add_filter('previous_post_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="prev-post"';
}
function posts_link_attributes_2() {
    return 'class="next-post"';
}
?>